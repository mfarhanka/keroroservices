<?php require_once __DIR__ . '/lib/seo.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Kaundar Enterprise">
    <meta property="og:locale" content="en_MY">
    <meta property="og:title" content="<?= htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:card" content="<?= $seoSiteUrl !== '' ? 'summary_large_image' : 'summary' ?>">
    <meta name="twitter:title" content="<?= htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8') ?>">
    <?php if ($seoSiteUrl !== ''): ?>
    <link rel="canonical" href="<?= htmlspecialchars($seoSiteUrl . '/', ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($seoSiteUrl . '/', ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="<?= htmlspecialchars($seoSiteUrl . $seoImagePath, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image:alt" content="Kaundar Enterprise waste service truck at a project site">
    <meta name="twitter:image" content="<?= htmlspecialchars($seoSiteUrl . $seoImagePath, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:image:alt" content="Kaundar Enterprise waste service truck at a project site">
    <?php endif; ?>
    <script type="application/ld+json"><?= json_encode($seoBusiness, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
    <link rel="icon" type="image/png" sizes="512x512" href="assets/images/brand/favicon.png">
    <link rel="icon" type="image/x-icon" href="assets/images/brand/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/brand/apple-touch-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=League+Spartan:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script>
        tailwind.config = {
            theme: { extend: {
                colors: { ink:'#10233f', keBlue:'#123e72', keRed:'#b3212d', mist:'#eef3f7', steel:'#6d7a88' },
                fontFamily: { sans:['DM Sans','sans-serif'], display:['League Spartan','sans-serif'] }
            }}
        }
    </script>
    <style>
        html { scroll-behavior:smooth }
        .grid-lines { background-image:linear-gradient(rgba(255,255,255,.05) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.05) 1px,transparent 1px);background-size:32px 32px }
        .clip-angle { clip-path:polygon(0 0,100% 0,92% 100%,0 100%) }
    </style>
</head>
<body class="bg-white font-sans text-ink antialiased">
    <div class="bg-ink text-white/80 text-xs">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-5 py-2">
            <span>Established 1994 · Reg. No. 199403089328 (000970576-H)</span>
            <a class="hidden hover:text-white sm:block" href="mailto:kaundarenterprise@gmail.com">kaundarenterprise@gmail.com</a>
        </div>
    </div>
    <header class="sticky top-0 z-40 border-b border-slate-200 bg-white/95 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4">
            <a href="#home" aria-label="Kaundar Enterprise home" class="flex min-w-0 items-center gap-3 sm:gap-4">
                <img src="assets/images/brand/ke-logo.png" width="512" height="512" alt="Kaundar Enterprise KE logo" class="h-14 w-14 shrink-0 object-contain sm:h-[68px] sm:w-[68px]">
                <div class="min-w-0">
                    <div class="whitespace-nowrap font-display text-lg font-extrabold tracking-wide text-keBlue sm:text-[30px] sm:leading-none">KAUNDAR ENTERPRISE</div>
                    <div class="mt-1 whitespace-nowrap text-[8px] font-bold tracking-[.25em] text-slate-500 sm:mt-2 sm:text-[11px] sm:tracking-[.32em]">WASTE &amp; RORO SERVICES</div>
                </div>
            </a>
            <nav class="hidden items-center gap-7 text-sm font-semibold lg:flex">
                <a href="#about" class="hover:text-keRed">About</a>
                <a href="#services" class="hover:text-keRed">Services</a>
                <a href="#packages" class="hover:text-keRed">Packages</a>
                <a href="#projects" class="hover:text-keRed">Projects</a>
                <a href="#contact" class="hover:text-keRed">Contact</a>
            </nav>
            <a href="tel:+60162835680" aria-label="Call Kaundar Enterprise" class="ml-3 flex h-11 w-11 shrink-0 items-center justify-center rounded-sm bg-keRed text-sm font-bold text-white transition hover:bg-red-800 sm:h-auto sm:w-auto sm:px-5 sm:py-3">
                <i class="fa-solid fa-phone sm:mr-2"></i><span class="hidden sm:inline">016-283 5680</span>
            </a>
        </div>
    </header>
