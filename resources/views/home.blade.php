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
   <header class="bg-white shadow-md fixed z-50 top-0 left-0 w-full">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
            <a href="/"><img class="w-14 cursor-pointer" src="{{ URL ('images/solsticelogo.png')}}" alt="..."></a>
            </div>
            
            <div class="flex items-center gap-6">
                <p><a href="/auth" class="rounded-full bg-black text-white px-3 py-2 hover:bg-gray-400 cursor-pointer">Sign In</a></p>
                <ion-icon onclick="onToggleMenu(this)" name="menu-outline" class="text-2xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>
<div class="nav-links z-[999] duration-500 md:static absolute bg-white md:min-h-fit min-h-[40vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
        <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
            <li>
                <form action="/" method="GET">
                @csrf
                <input type="hidden" name="page" value="home">
                <button class="hover:text-gray-500">Home</button>
                </form>
            </li>
            <li>
                <form action="/" method="GET">
                @csrf
                <input type="hidden" name="page" value="products">
                <button class="hover:text-gray-500">Products</button>
                </form>
            </li>
            <li>
            <form action="/" method="GET">
                @csrf
                <input type="hidden" name="page" value="about">
                <button class="hover:text-gray-500">About</button>
                </form>
            </li>
            <li>
                <a class="hover:text-gray-500" href="#">Developers</a>
            </li>
        </ul>
    </div>

<!-- HOME FORM -->
@if ($page === 'home')
<div class="justify-items-center">
     <!--HTML CODE-->
    <div class="w-full relative pt-20">
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

<!-- Cards For Clothe Items -->
<p class="font-bold mx-5">New Arrivals</p>
<div class="flex flex-wrap justify-between mx-2 my-3">
    <!-- card1 -->
    <div class="w-full max-w-[48%] bg-white border border-black-200 rounded-lg shadow-sm">
        <a href="#">
            <img class="p-4 rounded-t-lg" src="https://images.samsung.com/is/image/samsung/p6pim/ph/2407/gallery/ph-galaxy-watch-ultra-l705-sm-l705fdaaxtc-542169673?$684_547_PNG$" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#" class="px-1">
                <h5 class="text-sm font-normal tracking-tight text-gray-900">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
            </a>
            <div class="flex items-center justify-between">
                <span class="text-md font-medium text-black">$599</span>
                <!-- <a href="#" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a> -->
            </div>
        </div>
    </div>
    <!-- card 2 -->
    <div class="w-full max-w-[48%] bg-white border border-black-200 rounded-lg shadow-sm">
        <a href="#">
            <img class="p-4 rounded-t-lg" src="https://images.samsung.com/is/image/samsung/p6pim/ph/2407/gallery/ph-galaxy-watch-ultra-l705-sm-l705fdaaxtc-542169673?$684_547_PNG$" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#" class="px-1">
                <h5 class="text-sm font-normal tracking-tight text-gray-900">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
            </a>
            <div class="flex items-center justify-between">
                <span class="text-md font-medium text-black">$599</span>
                <!-- <a href="#" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a> -->
            </div>
        </div>
    </div>
</div>
@endif
                <!-- END OF HOME PAGE -->

<!-- ---------------------------------------------------------------------------------------------------------------- -->
@if ($page === 'products')
<!-- START OF PRODUCTS PAGE -->
<div class="my-20">
<!-- Search Bar -->
    <form class="m-5 w-full max-w-[92%]">
        <div class="flex">
            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only">Your Email</label>
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg></button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdown-button">
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Mockups</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Templates</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Design</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Logos</button>
                </li>
                </ul>
            </div>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required />
                <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>
<p class="font-bold m-4">All Products</p>
<div class="flex flex-wrap justify-between mx-2 my-3">
    <!-- card1 -->
    <div class="w-full max-w-[48%] bg-white border border-black-200 rounded-lg shadow-sm">
        <a href="#">
            <img class="p-12 rounded-t-lg" src="https://images.samsung.com/is/image/samsung/p6pim/ph/2407/gallery/ph-galaxy-watch-ultra-l705-sm-l705fdaaxtc-542169673?$684_547_PNG$" alt="product image" />
        </a>
        <div class="px-5">
            <a href="#">
                <h5 class="text-sm font-normal tracking-tight text-gray-900">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
            </a>
        </div>
        <div class="px-5 py-2 flex flex-col items-center justify-between">
                <p class="text-md font-medium text-blue-600 py-2">$599</p>
                <a href="#" class="w-full text-white bg-black hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
        </div>
    </div>
    <!-- card 2 -->
    <div class="w-full max-w-[48%] bg-white border border-black-200 rounded-lg shadow-sm">
        <a href="#">
            <img class="p-12 rounded-t-lg" src="https://images.samsung.com/is/image/samsung/p6pim/ph/2407/gallery/ph-galaxy-watch-ultra-l705-sm-l705fdaaxtc-542169673?$684_547_PNG$" alt="product image" />
        </a>
        <div class="px-5">
            <a href="#">
                <h5 class="text-sm font-normal tracking-tight text-gray-900">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
            </a>
        </div>
        <div class="px-5 py-2 flex flex-col items-center justify-between">
                <p class="text-md font-medium text-blue-600 py-2">$599</p>
                <a href="#" class="w-full text-white bg-black hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
        </div>
    </div>
</div>
</div>
@endif
                <!--  END OF PRODUCTS -->

<!-- ------------------------------------------------------------------------------------------------------------------------ -->

                <!-- START OF ABOUT -->
@if($page === 'about')
    <div class="mt-20">
    <h1 class="font-bold m-5">About</h1>
    <p class="ml-5">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    </div>
@endif
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