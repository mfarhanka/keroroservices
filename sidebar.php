<a href="https://wa.me/60162835680" target="_blank" rel="noopener" aria-label="WhatsApp Kaundar Enterprise" class="fixed bottom-5 right-5 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-green-500 text-3xl text-white shadow-2xl hover:bg-green-600"><i class="fa-brands fa-whatsapp"></i></a>
<div id="booking-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 p-4 backdrop-blur-sm">
    <div class="w-full max-w-md overflow-hidden rounded-3xl border-2 border-rorored bg-white shadow-2xl">
        <div class="flex items-center justify-between bg-rorored p-5 text-white"><h3 class="font-heading text-lg font-black uppercase">Service Enquiry</h3><button onclick="closeBookingModal()" aria-label="Close"><i class="fa-solid fa-xmark text-xl"></i></button></div>
        <form onsubmit="submitEnquiry(event)" class="space-y-4 p-5">
            <input id="enquiry-name" required class="w-full rounded-xl border bg-slate-50 px-4 py-3 text-sm" placeholder="Full name">
            <select id="enquiry-service" class="w-full rounded-xl border bg-slate-50 px-4 py-3 text-sm"><option>Wastage / Roro Bin</option><option>Sewerage</option><option>Liquid Disposal</option><option>Recycle Items</option><option>Transport & Heavy Goods</option><option>Cutting Trees & Disposal</option><option>Clear Debris & Disposal</option></select>
            <input id="enquiry-location" required class="w-full rounded-xl border bg-slate-50 px-4 py-3 text-sm" placeholder="Project location">
            <button class="w-full rounded-xl bg-green-500 py-3 font-heading font-black uppercase text-white"><i class="fa-brands fa-whatsapp mr-2"></i>Send via WhatsApp</button>
        </form>
    </div>
</div>
<script>
function openBookingModal(){const m=document.getElementById('booking-modal');m.classList.remove('hidden');m.classList.add('flex')}
function closeBookingModal(){const m=document.getElementById('booking-modal');m.classList.add('hidden');m.classList.remove('flex')}
function submitEnquiry(e){e.preventDefault();const n=document.getElementById('enquiry-name').value,s=document.getElementById('enquiry-service').value,l=document.getElementById('enquiry-location').value;window.open(`https://wa.me/60162835680?text=${encodeURIComponent(`Hello Kaundar Enterprise!\nName: ${n}\nService: ${s}\nLocation: ${l}`)}`,'_blank');closeBookingModal()}
</script>
