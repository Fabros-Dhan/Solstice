<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   <header class="bg-white shadow-md">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-20 cursor-pointer" src="{{ URL ('images/solsticelogo.png')}}" alt="...">
            </div>
            <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[40vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
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
                <button class="rounded-full bg-black text-white px-5 py-2 hover:bg-gray-400 cursor-pointer">Sign In</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu-outline" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>

    <!-- Script -->
    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu-outline' ? 'close' : 'menu-outline'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>

</body>
</html>