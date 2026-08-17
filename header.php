<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Perkhidmatan tong roro dan pengurusan sisa oleh Kaundar Enterprise di Kuala Lumpur dan Selangor.">
    <title><?= htmlspecialchars($pageTitle ?? 'Kaundar Enterprise', ENT_QUOTES, 'UTF-8') ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script>
        tailwind.config={theme:{extend:{colors:{rorored:{DEFAULT:'#DC2626',dark:'#B91C1C'},roroblue:{DEFAULT:'#1D4ED8',dark:'#1E3A8A',deep:'#172554'}},fontFamily:{sans:['Plus Jakarta Sans','sans-serif'],heading:['Montserrat','sans-serif']}}}}
    </script>
    <style>
        html{scroll-behavior:smooth}.badge-shield{clip-path:polygon(0 0,100% 0,100% 85%,50% 100%,0 85%)}
        .dot-pattern{background-image:radial-gradient(#1d4ed8 1px,transparent 1px);background-size:18px 18px}
    </style>
</head>
<body class="bg-white font-sans text-gray-800 antialiased pb-16 md:pb-0">
    <div class="bg-roroblue py-2 text-xs text-white">
        <div class="mx-auto flex max-w-6xl justify-between px-4">
            <span><i class="fa-solid fa-circle mr-2 text-[7px] text-green-300"></i>Perkhidmatan Kuala Lumpur & Selangor</span>
            <span class="hidden sm:block"><i class="fa-solid fa-clock mr-1 text-blue-200"></i> Ditubuhkan sejak 1994</span>
        </div>
    </div>
    <header class="sticky top-0 z-40 border-b-2 border-roroblue bg-white shadow-md">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-3 px-4 py-3 md:flex-row">
            <div class="flex w-full items-center justify-between md:w-auto">
                <a href="#hero" class="flex items-center gap-3">
                    <div class="badge-shield flex h-14 w-12 items-center justify-center bg-roroblue font-heading text-lg font-black text-white"><span class="text-red-300">K</span>E</div>
                    <div><div class="font-heading text-xl font-extrabold tracking-wider text-roroblue">KAUNDAR ENTERPRISE</div><div class="text-[10px] font-extrabold uppercase tracking-[.22em] text-gray-500">Waste & Roro Services</div></div>
                </a>
                <a href="https://wa.me/60162835680" class="rounded-full bg-green-500 px-3 py-2 text-xs font-bold text-white md:hidden"><i class="fa-brands fa-whatsapp mr-1"></i> WhatsApp</a>
            </div>
            <nav class="flex w-full items-center justify-center gap-1 overflow-x-auto rounded-xl border border-blue-100 bg-blue-50 p-1.5 text-xs font-bold md:w-auto">
                <a href="#hero" class="rounded-lg bg-rorored px-3 py-2 text-white">Utama</a>
                <a href="#about" class="rounded-lg px-3 py-2 text-blue-900 hover:bg-blue-100">About</a>
                <a href="#servis" class="rounded-lg px-3 py-2 text-blue-900 hover:bg-blue-100">Services</a>
                <a href="#packages" class="rounded-lg px-3 py-2 text-blue-900 hover:bg-blue-100">Packages</a>
                <a href="#projek" class="rounded-lg px-3 py-2 text-blue-900 hover:bg-blue-100">Projek</a>
                <a href="#hubungi" class="rounded-lg px-3 py-2 text-blue-900 hover:bg-blue-100">Hubungi</a>
            </nav>
        </div>
    </header>
