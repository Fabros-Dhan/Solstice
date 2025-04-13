<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Poppins:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Custom Swiper Styling -->
    <style>
        .swiper-wrapper {
        width: 100%;
        height: max-content !important;
        padding-bottom: 64px !important;
        -webkit-transition-timing-function: linear !important;
        transition-timing-function: linear !important;
        position: relative;
        }

        .swiper-pagination-bullet {
        background: #4F46E5;
        }

        .swiper-pagination-bullet-active {
        background: #4F46E5 !important;
        }
    </style>

</head>
<body>
   <header class="bg-white shadow-md top-0 left-0 w-full">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-20 cursor-pointer" src="{{ URL ('images/solsticelogo.png')}}" alt="...">
            </div>
            <div class="nav-links z-[999] duration-500 md:static absolute bg-white md:min-h-fit min-h-[40vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-500"  href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Products</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">About</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Developers</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <p><a href="/auth" class="rounded-full bg-black text-white px-5 py-2 hover:bg-gray-400 cursor-pointer">Sign In</a></p>
                <ion-icon onclick="onToggleMenu(this)" name="menu-outline" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>
<div class="justify-items-center">
     <!--HTML CODE-->
    <div class="w-full relative mt-10">
    <div class="swiper max-w-[94%] centered-slide-carousel swiper-container relative ">
    <div class="swiper-wrapper">
    <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-120 flex justify-center items-center">
        <span class="text-3xl font-semibold text-indigo-600">Slide 1 </span>
    </div>
    </div>
    <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-120 flex justify-center items-center">
        <span class="text-3xl font-semibold text-indigo-600">Slide 2 </span>
    </div>
    </div>
    <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-120 flex justify-center items-center">
        <span class="text-3xl font-semibold text-indigo-600">Slide 3 </span>
    </div>
    </div>
    <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-120 flex justify-center items-center">
        <span class="text-3xl font-semibold text-indigo-600">Slide 4 </span>
    </div>
    </div>
    <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-120 flex justify-center items-center">
        <span class="text-3xl font-semibold text-indigo-600">Slide 5 </span>
    </div>
    </div>
    <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-120 flex justify-center items-center">
        <span class="text-3xl font-semibold text-indigo-600">Slide 6 </span>
    </div>
    </div>
    </div>
    <div class="swiper-pagination "></div>
    </div>
    </div>
    
    <!-- Button Shop -->
     <button type="submit" class="rounded-sm border py-2 px-4 m-3 cursor-pointer hover:bg-gray-300">Shop Now!</button>
</div>
    <!-- Scripts -->
    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu-outline' ? 'close' : 'menu-outline'
            navLinks.classList.toggle('top-[9%]')
        }
        const swiper = new Swiper(".centered-slide-carousel", {
        centeredSlides: true,
        paginationClickable: true,
        loop: true,
        spaceBetween: 30,
        slideToClickedSlide: true,
        pagination: {
            el: ".centered-slide-carousel .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1920: {
            slidesPerView: 4,
            spaceBetween: 30
            },
            1028: {
            slidesPerView: 2,
            spaceBetween: 10
            },
            990: {
            slidesPerView: 1,
            spaceBetween: 0
            }
        }
        });
    </script>

</body>
</html>