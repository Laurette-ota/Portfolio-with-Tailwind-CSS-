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
        <!-- intro content -->
        <!-- image -->
        <img class="right-0 bottom-0 lg:left-0 absolute mx-auto h-5/6 object-cover" src="./img/man.png" alt="" />
        <!-- circle -->
        <div
            class="hidden lg:block right-0 -bottom-1/4 left-0 -z-10 absolute bg-indigo-900 mx-auto rounded-full w-big h-big">
        </div>
        <!-- animated text -->
        <div
            class="top-1/3 left-5 sm:left-10 md:left-1/4 lg:left-5 xl:left-48 absolute font-bold text-xl sm:text-4xl md:text-6xl xl:text-7xl">
            <span class="text-gray-600">Frelance</span>
            <p id="text" class="text-red-500"></p>
        </div>
        <!-- texts -->
        <div
            class="hidden top-0 right-10 bottom-0 absolute lg:flex flex-col gap-5 bg-white dark:bg-slate-900 shadow-lg dark:shadow-slate-800 m-auto p-6 rounded-md w-1/3 h-fit">
            <h1 class="font-bold text-indigo-900 text-4xl">Hi, I'm John</h1>
            <p class="text-gray-400">
                with over 10 years of experience on web design and development. Lorem
                ipsum dolor sit amet consectetur adipisicing elit. N oumquam quo
                provident, facere minus temporibus veniam nostrum reprehenderit nihil?
            </p>
            <a class="bg-indigo-600 px-3 py-2 rounded-md w-fit font-semibold text-white text-xl" href="#contact">Hire
                Me</a>
        </div>
    </div>
    <!-- about -->
    <div id="about" class="dark:bg-slate-900 px-10">
        <div class="flex lg:flex-row flex-col-reverse items-center gap-20 mx-auto py-40 container">
            <!-- left -->
            <div class="relative">
                <img class="top-0 left-0 -z-10 absolute h-1/4" src="./img/dots.png" alt="" />
                <div class="rounded-full h-full overflow-hidden">
                    <img src="./img/portrait.png" alt="" />
                </div>
            </div>
            <!-- right -->
            <div class="flex flex-col gap-3 my-auto">
                <h1 class="font-bold text-indigo-600">ABOUT ME</h1>
                <h1 class="font-medium dark:text-white text-3xl">Better Design</h1>
                <h1 class="font-medium dark:text-white text-3xl">
                    Better Experience
                </h1>
                <p class="text-gray-400">
                    I design and build digital products. I'm also a multi-disciplinary
                    maker with over 10 years of experiences in wide range of design
                    disciplines.
                </p>
                <h2 class="font-medium text-gray-400">HTML</h2>
                <div class="bg-gray-200 rounded-md w-full h-1.5">
                    <div class="bg-indigo-600 rounded-md w-full h-1.5"></div>
                </div>
                <h2 class="font-medium text-gray-400">Javascript</h2>
                <div class="bg-gray-200 rounded-md w-full h-1.5">
                    <div class="bg-indigo-600 rounded-md w-4/6 h-1.5"></div>
                </div>
                <h2 class="font-medium text-gray-400">React</h2>
                <div class="bg-gray-200 rounded-md w-full h-1.5">
                    <div class="bg-indigo-600 rounded-md w-5/6 h-1.5"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->
    <div id="services" class="dark:bg-slate-900">
        <div class="mx-auto container">
            <!-- top -->
            <div class="flex flex-col items-center gap-3">
                <h1 class="font-bold text-indigo-600">SERVICES</h1>
                <h1 class="dark:text-white text-3xl">What do I offer?</h1>
                <p class="w-1/2 text-gray-400 text-center">
                    My approach to website design is to create a website that
                    strengthens your company’s brand while ensuring ease of use and
                    simplicity for your audience.
                </p>
            </div>
            <!-- bottom -->
            <div class="flex flex-wrap justify-between p-5 sm:p-0">
                <!-- card -->
                <div class="flex flex-col gap-3 shadow-xl my-3 md:my-10 p-5 rounded-lg w-full md:w-4/12">
                    <img class="w-10" src="./img/icon.png" alt="" />
                    <h1 class="font-medium dark:text-white text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">
                        I specialize in creating interactive websites for individuals and
                        small businesses.
                    </p>
                    <a class="font-semibold text-indigo-600 text-sm" href="">Read More</a>
                </div>
                <!-- card -->
                <div class="flex flex-col gap-3 shadow-xl my-3 md:my-10 p-5 rounded-lg w-full md:w-4/12">
                    <img class="w-10" src="./img/icon.png" alt="" />
                    <h1 class="font-medium dark:text-white text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">
                        I specialize in creating interactive websites for individuals and
                        small businesses.
                    </p>
                    <a class="font-semibold text-indigo-600 text-sm" href="">Read More</a>
                </div>
                <!-- card -->
                <div class="flex flex-col gap-3 shadow-xl my-3 md:my-10 p-5 rounded-lg w-full md:w-4/12">
                    <img class="w-10" src="./img/icon.png" alt="" />
                    <h1 class="font-medium dark:text-white text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">
                        I specialize in creating interactive websites for individuals and
                        small businesses.
                    </p>
                    <a class="font-semibold text-indigo-600 text-sm" href="">Read More</a>
                </div>
                <!-- card -->
                <div class="flex flex-col gap-3 shadow-xl my-3 md:my-10 p-5 rounded-lg w-full md:w-4/12">
                    <img class="w-10" src="./img/icon.png" alt="" />
                    <h1 class="font-medium dark:text-white text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">
                        I specialize in creating interactive websites for individuals and
                        small businesses.
                    </p>
                    <a class="font-semibold text-indigo-600 text-sm" href="">Read More</a>
                </div>
                <!-- card -->
                <div class="flex flex-col gap-3 shadow-xl my-3 md:my-10 p-5 rounded-lg w-full md:w-4/12">
                    <img class="w-10" src="./img/icon.png" alt="" />
                    <h1 class="font-medium dark:text-white text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">
                        I specialize in creating interactive websites for individuals and
                        small businesses.
                    </p>
                    <a class="font-semibold text-indigo-600 text-sm" href="">Read More</a>
                </div>
                <!-- card -->
                <div class="flex flex-col gap-3 shadow-xl my-3 md:my-10 p-5 rounded-lg w-full md:w-4/12">
                    <img class="w-10" src="./img/icon.png" alt="" />
                    <h1 class="font-medium dark:text-white text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">
                        I specialize in creating interactive websites for individuals and
                        small businesses.
                    </p>
                    <a class="font-semibold text-indigo-600 text-sm" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- works -->
    <div id="works" class="dark:bg-slate-900 py-40">
        <div class="mx-auto container">
            <!-- top -->
            <div class="flex flex-col items-center gap-3">
                <h1 class="font-bold text-indigo-600">PORTFOLIO</h1>
                <h1 class="dark:text-white text-3xl">Works & Projects</h1>
                <p class="w-1/2 text-gray-400 text-center">
                    I help designers, small agencies and businesses bring their ideas to
                    life. Powered by Figma, VS Code and coffee, I turn your requirements
                    into a well-designed websites
                </p>
            </div>
            <!-- bottom -->
            <div class="flex flex-wrap justify-between p-5 sm:p-0">
                <!-- card -->
                <div
                    class="shadow-xl m-1 my-3 md:my-10 rounded-lg w-full md:w-5/12 lg:w-1/5 hover:scale-110 transition-all">
                    <img src="./img/item.png" />
                </div>
                <!-- card -->
                <div
                    class="shadow-xl m-1 my-3 md:my-10 rounded-lg w-full md:w-5/12 lg:w-1/5 hover:scale-110 transition-all">
                    <img src="./img/item.png" />
                </div>
                <!-- card -->
                <div
                    class="shadow-xl m-1 my-3 md:my-10 rounded-lg w-full md:w-5/12 lg:w-1/5 hover:scale-110 transition-all">
                    <img src="./img/item.png" />
                </div>
                <!-- card -->
                <div
                    class="shadow-xl m-1 my-3 md:my-10 rounded-lg w-full md:w-5/12 lg:w-1/5 hover:scale-110 transition-all">
                    <img src="./img/item.png" />
                </div>
                <!-- card -->
                <div
                    class="shadow-xl m-1 my-3 md:my-10 rounded-lg w-full md:w-5/12 lg:w-1/5 hover:scale-110 transition-all">
                    <img src="./img/item.png" />
                </div>
                <!-- card -->
                <div
                    class="shadow-xl m-1 my-3 md:my-10 rounded-lg w-full md:w-5/12 lg:w-1/5 hover:scale-110 transition-all">
                    <img src="./img/item.png" />
                </div>
                <!-- card -->
                <div
                    class="shadow-xl m-1 my-3 md:my-10 rounded-lg w-full md:w-5/12 lg:w-1/5 hover:scale-110 transition-all">
                    <img src="./img/item.png" />
                </div>
                <!-- card -->
                <div
                    class="shadow-xl m-1 my-3 md:my-10 rounded-lg w-full md:w-5/12 lg:w-1/5 hover:scale-110 transition-all">
                    <img src="./img/item.png" />
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    <div id="contact" class="dark:bg-slate-900">
        <div class="mx-auto container">
            <!-- top -->
            <div class="flex flex-col items-center gap-3">
                <h1 class="font-bold text-indigo-600">CONTACT</h1>
                <h1 class="dark:text-white text-3xl">Have a Question?</h1>
                <p class="w-1/2 text-gray-400 text-center">
                    Do you have an idea? Let's discuss it and see what we can do
                    together.
                </p>
            </div>
            <!-- bottom -->
            <form class="flex flex-col items-center gap-5 mt-5 p-8">
                <input
                    class="dark:bg-slate-800 p-2 rounded-sm ring-1 ring-indigo-300 dark:ring-0 w-full md:w-1/2 dark:text-white"
                    type="text" placeholder="Name Surname" />
                <input
                    class="dark:bg-slate-800 p-2 rounded-sm ring-1 ring-indigo-300 dark:ring-0 w-full md:w-1/2 dark:text-white"
                    type="email" placeholder="Email" />
                <textarea
                    class="dark:bg-slate-800 p-2 rounded-sm ring-1 ring-indigo-300 dark:ring-0 w-full md:w-1/2 dark:text-white"
                    cols="30" rows="10" placeholder="Message..."></textarea>
                <button class="bg-indigo-600 px-3 py-2 rounded-md w-1/2 font-medium text-white cursor-pointer">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <!-- footer -->
    <div class="bg-gray-800 w-full">
      <div class="flex justify-between items-center mx-auto py-5 container">
        <div class="flex items-center gap-2">
          <img class="w-8" src="./img/logo.png" alt="" />
          <span class="font-bold text-white text-2xl">Portwind.</span>
        </div>
        <span class="hidden md:block font-medium text-white"
          >© 2022 Portwind. Design with ♥️ by Lama Dev.</span
        >
        <div class="flex gap-2">
          <img class="w-4 cursor-pointer" src="./img/facebook.png" alt="" />
          <img class="w-4 cursor-pointer" src="./img/instagram.png" alt="" />
          <img class="w-4 cursor-pointer" src="./img/twitter.png" alt="" />
          <img class="w-4 cursor-pointer" src="./img/linkedin.png" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset("css/style.css") }}"></script>
    <script src="{{ asset("js/app.js") }}"></script>
    <script src="{{ asset("js/autotyping.js") }}"></script>
</body>

</html>

</html>