<?php
declare(strict_types=1);
header('X-Robots-Tag: noindex, nofollow, noarchive');
session_start();
require __DIR__ . '/../lib/packages.php';

$adminPassword = (string) getenv('KAUNDAR_ADMIN_PASSWORD');
$publicSiteUrl = defined('ADMIN_PUBLIC_SITE_URL') ? ADMIN_PUBLIC_SITE_URL : '../index.php#packages';
$uploadDirectory = defined('ADMIN_UPLOAD_DIRECTORY') ? ADMIN_UPLOAD_DIRECTORY : __DIR__ . '/../assets/images/packages';
$imagePreviewPrefix = defined('ADMIN_IMAGE_PREVIEW_PREFIX') ? ADMIN_IMAGE_PREVIEW_PREFIX : '../';
$error = '';
$notice = $_SESSION['notice'] ?? '';
unset($_SESSION['notice']);

if (isset($_POST['login_password'])) {
    if ($adminPassword === '') {
        $error = 'Admin login is unavailable until KAUNDAR_ADMIN_PASSWORD is configured.';
    } elseif (hash_equals($adminPassword, (string) $_POST['login_password'])) {
        session_regenerate_id(true);
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
        header('Location: index.php');
        exit;
    }
    $error = 'Incorrect password.';
}

if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_destroy();
    header('Location: index.php');
    exit;
}

$loggedIn = !empty($_SESSION['admin_logged_in']);

if ($loggedIn && $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['login_password'])) {
    if (!hash_equals($_SESSION['csrf'] ?? '', (string) ($_POST['csrf'] ?? ''))) {
        http_response_code(403);
        exit('Invalid request token.');
    }

    $packages = loadPackages();
    $action = (string) ($_POST['action'] ?? '');
    $id = preg_replace('/[^a-zA-Z0-9_-]/', '', (string) ($_POST['id'] ?? ''));

    if ($action === 'delete') {
        $packages = array_values(array_filter($packages, fn ($package) => ($package['id'] ?? '') !== $id));
        $notice = 'Package deleted.';
    } else {
        $size = trim((string) ($_POST['size'] ?? ''));
        $price = trim((string) ($_POST['price'] ?? '')) ?: 'Negotiable';
        $image = trim((string) ($_POST['existing_image'] ?? ''));

        if ($size === '') {
            $error = 'Package size/name is required.';
        } else {
            if (!empty($_FILES['image']['tmp_name'])) {
                $allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];
                $mime = (new finfo(FILEINFO_MIME_TYPE))->file($_FILES['image']['tmp_name']);
                if (!isset($allowed[$mime]) || (int) $_FILES['image']['size'] > 5 * 1024 * 1024) {
                    $error = 'Use a JPG, PNG or WEBP image up to 5 MB.';
                } else {
                    if (!is_dir($uploadDirectory)) {
                        mkdir($uploadDirectory, 0775, true);
                    }
                    $filename = bin2hex(random_bytes(8)) . '.' . $allowed[$mime];
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory . '/' . $filename)) {
                        $image = 'assets/images/packages/' . $filename;
                    } else {
                        $error = 'The image could not be uploaded.';
                    }
                }
            }

            if ($error === '') {
                $record = ['id' => $id ?: 'pkg-' . bin2hex(random_bytes(6)), 'size' => $size, 'image' => $image, 'price' => $price, 'active' => isset($_POST['active'])];
                $found = false;
                foreach ($packages as $key => $package) {
                    if (($package['id'] ?? '') === $id) {
                        $packages[$key] = $record;
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $packages[] = $record;
                }
                $notice = $found ? 'Package updated.' : 'Package added.';
            }
        }
    }

    if ($error === '') {
        if (!savePackages($packages)) {
            $error = 'Could not save package data. Check the data folder permissions.';
        } else {
            $_SESSION['notice'] = $notice;
            header('Location: index.php');
            exit;
        }
    }
}

$packages = loadPackages();
$editId = (string) ($_GET['edit'] ?? '');
$editing = null;
foreach ($packages as $package) {
    if (($package['id'] ?? '') === $editId) {
        $editing = $package;
        break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Package Admin | Kaundar Enterprise</title>
    <link rel="icon" type="image/png" href="../assets/images/brand/ke-logo.png?v=20260828-2">
    <link rel="shortcut icon" type="image/png" href="../assets/images/brand/ke-logo.png?v=20260828-2">
    <link rel="apple-touch-icon" href="../assets/images/brand/ke-logo.png?v=20260828-2">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-900">
<?php if (!$loggedIn): ?>
    <main class="mx-auto flex min-h-screen max-w-md items-center px-5">
        <form method="post" class="w-full rounded-xl bg-white p-8 shadow-lg">
            <h1 class="text-2xl font-extrabold">Package Admin</h1>
            <p class="mt-2 text-sm text-slate-500">Sign in to manage website packages.</p>
            <?php if ($error): ?><p class="mt-4 rounded bg-red-50 p-3 text-sm text-red-700"><?= htmlspecialchars($error) ?></p><?php endif; ?>
            <label class="mt-6 block text-sm font-bold">Password</label>
            <input type="password" name="login_password" required autofocus class="mt-2 w-full rounded border border-slate-300 px-4 py-3">
            <button class="mt-5 w-full rounded bg-blue-800 px-4 py-3 font-bold text-white">Sign in</button>
        </form>
    </main>
<?php else: ?>
    <header class="bg-slate-900 text-white"><div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-5"><div><h1 class="text-xl font-extrabold">Package Admin</h1><p class="text-xs text-slate-400">Kaundar Enterprise</p></div><div class="flex gap-4 text-sm"><a href="<?= htmlspecialchars($publicSiteUrl) ?>" target="_blank" class="text-blue-300">View site</a><a href="?logout=1" class="text-red-300">Log out</a></div></div></header>
    <main class="mx-auto grid max-w-6xl gap-8 px-5 py-8 lg:grid-cols-[1fr_360px]">
        <section>
            <?php if ($notice): ?><p class="mb-5 rounded bg-green-100 p-4 text-green-800"><?= htmlspecialchars($notice) ?></p><?php endif; ?>
            <?php if ($error): ?><p class="mb-5 rounded bg-red-100 p-4 text-red-800"><?= htmlspecialchars($error) ?></p><?php endif; ?>
            <div class="overflow-hidden rounded-xl bg-white shadow-sm">
                <table class="w-full text-left text-sm"><thead class="bg-slate-50 text-xs uppercase text-slate-500"><tr><th class="p-4">Package</th><th class="p-4">Price</th><th class="p-4">Status</th><th class="p-4 text-right">Actions</th></tr></thead>
                <tbody class="divide-y"><?php foreach ($packages as $package): ?><tr>
                    <td class="p-4"><div class="flex items-center gap-3"><?php if (!empty($package['image'])): ?><img class="h-14 w-20 rounded object-cover" src="<?= htmlspecialchars($imagePreviewPrefix . $package['image']) ?>" alt=""><?php endif; ?><strong><?= htmlspecialchars($package['size'] ?? '') ?></strong></div></td>
                    <td class="p-4"><?= htmlspecialchars($package['price'] ?? 'Negotiable') ?></td>
                    <td class="p-4"><span class="rounded-full px-2 py-1 text-xs font-bold <?= !empty($package['active']) ? 'bg-green-100 text-green-700' : 'bg-slate-200 text-slate-600' ?>"><?= !empty($package['active']) ? 'Active' : 'Hidden' ?></span></td>
                    <td class="p-4 text-right"><a class="font-bold text-blue-700" href="?edit=<?= urlencode($package['id']) ?>">Edit</a><form method="post" class="ml-3 inline" onsubmit="return confirm('Delete this package?')"><input type="hidden" name="csrf" value="<?= htmlspecialchars($_SESSION['csrf']) ?>"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?= htmlspecialchars($package['id']) ?>"><button class="font-bold text-red-600">Delete</button></form></td>
                </tr><?php endforeach; ?></tbody></table>
            </div>
        </section>
        <aside><form method="post" enctype="multipart/form-data" class="rounded-xl bg-white p-6 shadow-sm">
            <h2 class="text-lg font-extrabold"><?= $editing ? 'Edit package' : 'Add package' ?></h2>
            <input type="hidden" name="csrf" value="<?= htmlspecialchars($_SESSION['csrf']) ?>"><input type="hidden" name="action" value="save"><input type="hidden" name="id" value="<?= htmlspecialchars($editing['id'] ?? '') ?>"><input type="hidden" name="existing_image" value="<?= htmlspecialchars($editing['image'] ?? '') ?>">
            <label class="mt-5 block text-sm font-bold">Size / name</label><input name="size" required value="<?= htmlspecialchars($editing['size'] ?? '') ?>" placeholder="12 x 6 x 4" class="mt-2 w-full rounded border px-3 py-2.5">
            <label class="mt-4 block text-sm font-bold">Price label</label><input name="price" value="<?= htmlspecialchars($editing['price'] ?? 'Negotiable') ?>" class="mt-2 w-full rounded border px-3 py-2.5">
            <label class="mt-4 block text-sm font-bold">Image</label><input type="file" name="image" accept="image/jpeg,image/png,image/webp" class="mt-2 block w-full text-sm"><p class="mt-1 text-xs text-slate-500">JPG, PNG or WEBP. Maximum 5 MB.</p>
            <label class="mt-5 flex items-center gap-2 text-sm font-bold"><input type="checkbox" name="active" <?= !isset($editing['active']) || !empty($editing['active']) ? 'checked' : '' ?>> Show on website</label>
            <button class="mt-6 w-full rounded bg-blue-800 px-4 py-3 font-bold text-white"><?= $editing ? 'Save changes' : 'Add package' ?></button>
            <?php if ($editing): ?><a href="index.php" class="mt-3 block text-center text-sm text-slate-500">Cancel editing</a><?php endif; ?>
        </form></aside>
    </main>
<?php endif; ?>
</body></html>
