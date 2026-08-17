<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kaundar Enterprise provides waste, sewerage, liquid disposal, recycling, transport, tree cutting and debris clearing services across Kuala Lumpur and Selangor.">
    <title><?= htmlspecialchars($pageTitle ?? 'Kaundar Enterprise', ENT_QUOTES, 'UTF-8') ?></title>
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
            <a href="#home" class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-sm bg-keBlue font-display text-xl font-extrabold text-white shadow-sm"><span class="text-keRed">K</span>E</div>
                <div>
                    <div class="font-display text-xl font-extrabold tracking-wide text-keBlue">KAUNDAR</div>
                    <div class="-mt-1 text-[10px] font-bold tracking-[.32em] text-keRed">ENTERPRISE</div>
                </div>
            </a>
            <nav class="hidden items-center gap-7 text-sm font-semibold lg:flex">
                <a href="#about" class="hover:text-keRed">About</a>
                <a href="#services" class="hover:text-keRed">Services</a>
                <a href="#projects" class="hover:text-keRed">Projects</a>
                <a href="#contact" class="hover:text-keRed">Contact</a>
            </nav>
            <a href="tel:+60162835680" class="rounded-sm bg-keRed px-5 py-3 text-sm font-bold text-white transition hover:bg-red-800">
                <i class="fa-solid fa-phone mr-2"></i>016-283 5680
            </a>
        </div>
    </header>
