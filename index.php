<?php
$pageTitle='Kaundar Enterprise - Waste, Disposal & Transport Services';
require __DIR__.'/header.php';
$services=[
 ['fa-trash-can','Wastage','Waste collection and disposal for commercial, residential and construction sites.'],
 ['fa-droplet','Sewerage','Sewerage support delivered by an experienced and supervised field team.'],
 ['fa-flask','Liquid Disposal','Organised and efficient removal of liquid waste.'],
 ['fa-recycle','Recycle Items','Collection and transport of items suitable for recycling.'],
 ['fa-truck-ramp-box','Transport & Heavy Goods','Transport and moving support for heavy goods, equipment and materials.'],
 ['fa-tree','Cutting Trees & Disposal','Tree cutting, site clearing and disposal of green waste.'],
 ['fa-person-digging','Clear Debris & Disposal','Clearing and disposal of renovation, construction and project debris.']
];
?>
<main>
<section id="hero" class="relative overflow-hidden bg-gradient-to-b from-blue-50 via-white to-red-50 py-12 md:py-20">
    <div class="dot-pattern absolute inset-0 opacity-[.06]"></div>
    <div class="relative mx-auto grid max-w-6xl items-center gap-10 px-4 lg:grid-cols-2">
        <div>
            <div class="inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-100 px-4 py-2 text-xs font-extrabold uppercase tracking-wider text-roroblue">
                <i class="fa-solid fa-shield-halved"></i> Kaundar Enterprise
            </div>
            <h1 class="mt-5 font-heading text-4xl font-black uppercase leading-tight text-gray-900 md:text-6xl">Waste & Site <span class="mt-2 inline-block rounded-2xl bg-rorored px-4 py-1 text-white shadow-lg">Support Services</span></h1>
            <p class="mt-5 max-w-xl text-base font-medium leading-7 text-gray-600">From design to delivery, Kaundar Enterprise provides value-added environmental, disposal and transport services throughout Kuala Lumpur and Selangor.</p>
            <div class="mt-7 flex flex-wrap gap-3">
                <button onclick="openBookingModal()" class="rounded-xl bg-rorored px-6 py-3.5 font-heading text-sm font-extrabold uppercase text-white shadow-lg hover:bg-rorored-dark">Request a Quotation</button>
                <a href="https://wa.me/60162835680" class="rounded-xl bg-green-500 px-6 py-3.5 font-heading text-sm font-extrabold uppercase text-white shadow-lg hover:bg-green-600"><i class="fa-brands fa-whatsapp mr-2"></i>WhatsApp</a>
            </div>
        </div>
        <div class="rounded-3xl border-2 border-blue-100 bg-white p-4 shadow-2xl">
            <img src="assets/images/project-17-01.jpg" alt="Lori Kaundar Enterprise" class="h-[360px] w-full rounded-2xl object-cover">
            <div class="grid grid-cols-3 gap-2 pt-4 text-center">
                <div class="rounded-xl bg-blue-50 p-3"><b class="block font-heading text-xl text-roroblue">1994</b><span class="text-[10px] font-bold uppercase text-gray-500">Established</span></div>
                <div class="rounded-xl bg-red-50 p-3"><b class="block font-heading text-xl text-rorored">7</b><span class="text-[10px] font-bold uppercase text-gray-500">Core Services</span></div>
                <div class="rounded-xl bg-blue-50 p-3"><b class="block font-heading text-xl text-roroblue">30+</b><span class="text-[10px] font-bold uppercase text-gray-500">Years</span></div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="border-y border-gray-200 bg-white py-14">
    <div class="mx-auto grid max-w-6xl gap-6 px-4 md:grid-cols-3">
        <?php foreach ([['fa-globe','Growing Capability','Operations established in Kuala Lumpur and Selangor, with plans to pursue opportunities in new markets.'],['fa-building','Diverse Projects','Experience supporting hotels, government and private buildings, condominiums, mosques and retail establishments.'],['fa-lightbulb','Value-Added Service','Innovation, flexibility and a passion to excel guide the way we serve our expanding pool of clients.']] as [$icon,$title,$copy]): ?>
        <article class="rounded-2xl border-2 border-blue-100 bg-blue-50 p-6 text-center shadow-sm">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-roroblue text-2xl text-white shadow"><i class="fa-solid <?=$icon?>"></i></div>
            <h2 class="mt-4 font-heading text-lg font-extrabold uppercase text-roroblue"><?=$title?></h2><p class="mt-2 text-sm leading-6 text-gray-600"><?=$copy?></p>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<section id="servis" class="bg-blue-50 px-4 py-16 md:py-20">
    <div class="mx-auto max-w-6xl text-center">
        <div class="inline-block rounded-2xl bg-roroblue px-5 py-2 text-white shadow"><h2 class="font-heading text-2xl font-black uppercase md:text-4xl">Services Offered</h2></div>
        <p class="mx-auto mt-4 max-w-2xl font-medium text-gray-600">Complete support for waste management, disposal, site clearing and transportation.</p>
        <div class="mt-10 grid gap-5 text-left sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach($services as [$icon,$title,$copy]): ?>
            <article class="rounded-2xl border border-gray-200 bg-white p-6 shadow-md transition hover:-translate-y-1 hover:border-rorored">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-50 text-xl text-rorored"><i class="fa-solid <?=$icon?>"></i></div>
                <h3 class="mt-4 font-heading text-lg font-extrabold text-gray-900"><?=$title?></h3><p class="mt-2 text-sm leading-6 text-gray-600"><?=$copy?></p>
            </article>
            <?php endforeach; ?>
            <article class="flex flex-col justify-between rounded-2xl bg-rorored p-6 text-white shadow-lg"><div><i class="fa-solid fa-headset text-3xl"></i><h3 class="mt-4 font-heading text-xl font-black uppercase">Need a tailored service?</h3><p class="mt-2 text-sm text-red-100">Contact us to discuss your site and project requirements.</p></div><button onclick="openBookingModal()" class="mt-5 rounded-xl bg-white px-4 py-3 font-bold text-rorored">Contact Us</button></article>
        </div>
    </div>
</section>

<section id="packages" class="border-b border-blue-100 bg-white px-4 py-16 md:py-20">
    <div class="mx-auto max-w-6xl">
        <div class="text-center"><h2 class="font-heading text-3xl font-black uppercase text-gray-900 md:text-4xl">Packages & Payment Schemes</h2><p class="mt-3 text-gray-600">Package rates are negotiable according to the assignment and project requirements.</p></div>
        <div class="mt-10 grid gap-6 lg:grid-cols-[1.2fr_.8fr]">
            <div class="grid gap-4 sm:grid-cols-3">
                <?php foreach ([['12 x 6 x 2½','Cubic Yard Bin'],['12 x 6 x 4','Cubic Yard Bin'],['12 x 6 x 5','Cubic Yard Bin']] as [$size,$label]): ?>
                <article class="rounded-3xl border-2 border-red-100 bg-red-50 p-6 text-center shadow-sm">
                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-rorored text-2xl text-white"><i class="fa-solid fa-dumpster"></i></div>
                    <h3 class="mt-4 font-heading text-2xl font-black text-rorored"><?=$size?></h3><p class="text-xs font-bold uppercase tracking-wider text-gray-500"><?=$label?></p><span class="mt-4 inline-block rounded-full bg-white px-3 py-1 text-xs font-bold text-roroblue">Price: Negotiable</span>
                </article>
                <?php endforeach; ?>
            </div>
            <div class="rounded-3xl bg-roroblue p-7 text-white shadow-lg">
                <h3 class="font-heading text-xl font-black uppercase">Practicable Payment Schemes</h3>
                <ul class="mt-5 space-y-4 text-sm font-semibold"><li><i class="fa-solid fa-circle-check mr-3 text-green-300"></i>Cash on delivery</li><li><i class="fa-solid fa-circle-check mr-3 text-green-300"></i>Weekly basis</li><li><i class="fa-solid fa-circle-check mr-3 text-green-300"></i>Monthly basis</li></ul>
                <p class="mt-6 border-t border-white/20 pt-5 text-xs leading-6 text-blue-100">Legal receipts are supplied for initial, partial, advance and full payments. Contract or agreement paperwork is prepared once mutual terms are reached.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue-50 px-4 py-16">
    <div class="mx-auto grid max-w-6xl gap-7 lg:grid-cols-2">
        <article class="rounded-3xl border border-blue-100 bg-white p-7 shadow-md"><h2 class="font-heading text-2xl font-black uppercase text-roroblue">Business Background</h2><dl class="mt-5 grid grid-cols-[130px_1fr] gap-y-3 text-sm"><dt class="font-bold text-gray-500">Business name</dt><dd class="font-semibold">Kaundar Enterprise</dd><dt class="font-bold text-gray-500">Registration</dt><dd class="font-semibold">199403089328 (000970576-H)</dd><dt class="font-bold text-gray-500">Established</dt><dd class="font-semibold">10 April 1994</dd><dt class="font-bold text-gray-500">Coverage</dt><dd class="font-semibold">Kuala Lumpur & Selangor</dd><dt class="font-bold text-gray-500">Email</dt><dd class="font-semibold break-all">kaundarenterprise@gmail.com</dd></dl></article>
        <article class="rounded-3xl border border-red-100 bg-white p-7 shadow-md"><h2 class="font-heading text-2xl font-black uppercase text-rorored">Management & Workforce</h2><p class="mt-5 text-sm leading-7 text-gray-600">Sole proprietor: <b class="text-gray-900">Gunaselvem Solakunda</b>. The company profile records one office administrator, three company drivers and four staff in total.</p><p class="mt-4 text-sm leading-7 text-gray-600">The workforce comprises executive and administrative support, clerical and office maintenance staff, disciplined field supervisors, drivers and a dependable labour force.</p></article>
    </div>
</section>

<section id="projek" class="px-4 py-16 md:py-20">
    <div class="mx-auto max-w-6xl text-center">
        <h2 class="font-heading text-3xl font-black uppercase text-gray-900 md:text-4xl">Services & Project Sites</h2>
        <p class="mt-3 text-gray-600">Actual field photographs presented in the Kaundar Enterprise business profile.</p>
        <div class="mt-9 grid auto-rows-[220px] gap-4 md:grid-cols-3">
            <img src="assets/images/project-15-01.jpg" alt="Lori roro" class="h-full w-full rounded-2xl object-cover shadow-md md:row-span-2">
            <img src="assets/images/project-20-01.jpg" alt="Kerja tapak" class="h-full w-full rounded-2xl object-cover shadow-md">
            <img src="assets/images/project-25-01.jpg" alt="Operasi projek" class="h-full w-full rounded-2xl object-cover shadow-md">
            <img src="assets/images/project-30-01.jpg" alt="Projek Kaundar Enterprise" class="h-full w-full rounded-2xl object-cover shadow-md md:col-span-2">
        </div>
    </div>
</section>

<section class="bg-red-50 px-4 py-16">
    <div class="mx-auto max-w-6xl text-center"><h2 class="font-heading text-3xl font-black uppercase text-gray-900">Job Experience</h2><p class="mx-auto mt-3 max-w-2xl text-gray-600">The profile records assignments and service relationships with the following organisations and project teams.</p>
    <div class="mt-8 flex flex-wrap justify-center gap-2">
    <?php foreach (['Bina Good Year Sdn Bhd','Mecca Prima Sdn Bhd','LTY Sdn Bhd','Armada Harmony Enterprise','Kasugi Sdn Bhd','Justeru Jaya Sdn Bhd','PS Peru Vision Sdn Bhd','GSIIB Sdn Bhd','Borneo Technics','KLK Construction Sdn Bhd','CTC Top Construction Sdn Bhd','Success Court Engineering Sdn Bhd','Eng Han Bina Sdn Bhd','Villa Manjalara','SCOMI Coach Sdn Bhd','Lagoon View Sunway','Armour Security System Sdn Bhd','Rexallent Construction Sdn Bhd','VMDG Design Sdn Bhd','PC Label Sdn Bhd','MBP Services Sdn Bhd','Sanjung Sepang Sdn Bhd','Tiungmas Builders Sdn Bhd','Perfect 33 Enterprise','Malaysia Airport'] as $client): ?><span class="rounded-xl border border-red-200 bg-white px-4 py-2 text-xs font-bold text-gray-700 shadow-sm"><?=htmlspecialchars($client)?></span><?php endforeach; ?>
    </div></div>
</section>

<section id="hubungi" class="bg-gradient-to-br from-roroblue via-roroblue-dark to-rorored px-4 py-16 text-center text-white">
    <div class="mx-auto max-w-3xl"><h2 class="font-heading text-3xl font-black uppercase md:text-5xl">Discuss Your Project</h2><p class="mt-3 text-blue-100">Contact Kaundar Enterprise for availability, site requirements and a negotiated quotation.</p>
    <div class="mt-7 flex flex-col justify-center gap-3 sm:flex-row"><button onclick="openBookingModal()" class="rounded-2xl bg-white px-8 py-4 font-heading font-black uppercase text-rorored shadow-xl">Enquiry Form</button><a href="https://wa.me/60162835680" class="rounded-2xl bg-green-500 px-8 py-4 font-heading font-black uppercase text-white shadow-xl"><i class="fa-brands fa-whatsapp mr-2"></i>WhatsApp Us</a></div>
    <p class="mt-7 text-sm">016-283 5680 / 016-958 9970 · kaundarenterprise@gmail.com</p></div>
</section>
</main>
<?php require __DIR__.'/footer.php'; ?>
