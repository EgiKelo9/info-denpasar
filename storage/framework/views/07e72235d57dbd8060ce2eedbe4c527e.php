<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Denpasar | Berita <?php echo e($post->id); ?></title>

    <style>#profile:hover + #dropdown, #dropdown:hover {display: block;} #dropdown {display: none;}</style>
</head>

<body>

    <!-- Navbar -->
    <nav class="fixed flex justify-between items-center max-h-[100px] h-full w-full mx-auto py-[15px] px-[60px] bg-[#eeeeee] navbar-container z-10 top-0">
        <div class="flex justify-between items-center gap-[20px] font-semibold text-xl transition linear duration-300">
            <a href="#home"><img src="images/denpasar-logo.png" alt="" class=" w-[110px] object-cover cursor-pointer mr-[40px]"></a>
            <a href="/dashboard" class="py-[10px] px-[15px] hover:text-[#444444]">Beranda</a>
            <a href="/news" class="py-[10px] px-[15px] hover:text-[#444444]">Berita</a>
            <a href="/tourism" class="py-[10px] px-[15px] hover:text-[#444444]">Wisata</a>
            <a href="/information" class="py-[10px] px-[15px] hover:text-[#444444]">Informasi</a>
            <a href="/service" class="py-[10px] px-[15px] hover:text-[#444444]">Layanan</a>
        </div>
        <div id="profile" class="flex justify-center items-center gap-[10px] font-semibold text-xl cursor-pointer">
            <i class="bi-person-circle" style="font-size: 1.8rem;"></i>
            <p class="py-[10px] px-[5px]">Aryadana Baraja</p>
            <i class="bi-chevron-down" style="font-size: 1.4rem;"></i>
        </div>
        <div id="dropdown" class="absolute right-[60px] bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 mt-[135px]">
            <ul class="py-2 text-md text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil Anda</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar Akun</a></li>
            </ul>
        </div>
    </nav>
    
    <?php echo $__env->yieldContent('container'); ?>

    <!-- Footer -->
    <section class="flex flex-col justify-between items-center mt-[75px] px-[150px] py-[30px] maxh-h-[400px] h-full w-full bg-[#777777] bot-0" id="contact">
        <div class="flex justify-between items-center max-w-[1400px] w-full">
            <div class="flex gap-[20px]">
                <a href="https://www.facebook.com/denpasarkota/"><img src="images/facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/denpasarkota/"><img src="images/instagram.png" alt="Instagram"></a>
                <a href="https://x.com/DenpasarKota?t=hfgGVovkkblhQal2coK2lA&s=08"><img src="images/twitter.png" alt="Twitter"></a>
                <a href="https://www.youtube.com/denpasarkota"><img src="images/youtube.png" alt="Youtube"></a>
            </div>
            <div class="flex gap-[20px]">
                <a href=""><img src="images/denpasar-logo-footer.png" alt=""></a>
                <a href=""><img src="images/pemkot-logo-footer.png" alt=""></a>
            </div>
        </div>
        <div class="flex justify-between items-end max-w-[1400px] w-full p-[10px]">
            <div>
                <div class="flex flex-col justify-center text-white gap-2">
                    <h4 class="text-[25px] font-semibold">Pemerintah Kota Denpasar</h4>
                    <div class="flex gap-3 items-center">
                        <i class="bi-geo-alt" style="font-size: 18px;"></i>
                        <p class="font-normal text-lg">Graha Sewaka Dharma Lumintang Lt. III, Kota Denpasar, Bali - Indonesia</p>
                    </div>
                    <div class="flex gap-3 items-center">
                        <i class="bi-telephone" style="font-size: 18px;"></i>
                        <p class="font-normal text-lg">0361 - 431229</p>
                    </div>
                    <div class="flex gap-3 items-center">
                        <i class="bi-envelope" style="font-size: 18px;"></i>
                        <p class="font-normal text-lg">kominfo@denpasarkota.go.id</p>
                    </div>
                    <div class="flex gap-3 items-center">
                        <i class="bi-globe2" style="font-size: 18px;"></i>
                        <a href="https://www.denpasarkota.go.id">
                            <p class="font-normal text-lg">https://www.denpasarkota.go.id</p>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col justify-center text-white text-right gap-[10px]">
                    <div class="flex flex-col leading-3">
                        <h4 class="font-bold text-xl">Jumlah Responden : 8161</h4>
                        <h4 class="font-bold text-xl">Lihat Hasil</h4>
                    </div>
                    <div class="flex flex-col leading-3">
                        <h4 class="font-semibold text-lg">Review | Sitemap </h4>
                    </div>
                    <div class="flex flex-col leading-3">
                        <p class="font-normal text-base">© 2022 Pemerintah Kota Denpasar. All Right Reserved.</p>
                        <p class="font-normal text-base">Website by Bali Web Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html><?php /**PATH C:\laragon\www\info-denpasar\resources\views/layouts/news.blade.php ENDPATH**/ ?>