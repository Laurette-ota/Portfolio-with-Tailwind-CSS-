<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tailwind Portfolio</title>
</head>

<body class="font-nunito">
    <!-- into section -->
    <div
        class="relative bg-gradient-to-t from-indigo-200 dark:from-slate-800 dark:to-slate-900 h-1/2 lg:h-screen overflow-hidden">
        <!-- navbar -->
        <nav class="top-0 z-10 fixed bg-white dark:bg-slate-900 w-full">
            <div class="flex justify-between items-center mx-auto py-5 container">
                <div class="flex items-center gap-2">
                    <img class="w-8" src="./img/logo.png" alt="" />
                    <span class="font-bold text-indigo-900 dark:text-white text-2xl">Portwind.</span>
                </div>
                <ul class="hidden md:flex space-x-10 font-bold text-gray-600 dark:text-gray-100 text-sm uppercase">
                    <li class="hover:text-gray-500">
                        <a href="#">homepage</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#about">about me</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#services">services</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#works">works</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#contact">contact</a>
                    </li>
                </ul>
                <img id="moon" src="./img/moon.png" class="hidden md:block w-5 cursor-pointer" alt="" />
                <div id="hamburger" class="md:hidden z-20 space-y-1 cursor-pointer">
                    <div class="bg-black w-6 h-0.5"></div>
                    <div class="bg-black w-6 h-0.5"></div>
                    <div class="bg-black w-6 h-0.5"></div>
                </div>
                <ul id="menu"
                    class="hidden top-0 left-0 absolute space-y-10 bg-indigo-900 p-10 rounded-b-3xl w-full text-white text-center">
                    <li>
                        <a id="hLink" href="#">homepage</a>
                    </li>
                    <li>
                        <a id="hLink" href="#about">about me</a>
                    </li>
                    <li>
                        <a id="hLink" href="#services">services</a>
                    </li>
                    <li>
                        <a id="hLink" href="#works">works</a>
                    </li>
                    <li>
                        <a id="hLink" href="#contact">contact</a>
                    </li>
                </ul>
            </div>
        </nav>
</body>

</html>