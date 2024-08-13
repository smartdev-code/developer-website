<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/images/logo/logo-txt.png" />

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

        <!-- Include font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

    </head>
    <body>
        <header  x-data="{ open: false }" class="bg-blue-500 bg-opacity-80 fixed top-0 left-0 w-full z-10">
            <div class="container px-6 mx-auto py-3 flex justify-between items-center">
                <a href="/">
                    <img src="/images/logo/logo.png" class="w-12" />
                </a>
                <button @click="open = !open" class="max-lg:block hidden px-3 py-2 bg-blue-500 hover:bg-blue-300 text-white rounded-xl">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="max-lg:hidden flex items-center gap-4 text-white">
                    <a href="#HOME" class="px-3 py-1 inline-flex items-center justify-center gap-2 rounded-md hover:bg-blue-400"><i class="fa fa-home"></i> Home</a>
                    <a href="#WORK" class="px-3 py-1 inline-flex items-center justify-center gap-2 rounded-md hover:bg-blue-400"><i class="fa fa-briefcase"></i> Portfolio</a>
                    <a href="#BLOG" class="px-3 py-1 inline-flex items-center justify-center gap-2 rounded-md hover:bg-blue-400"><i class="fa fa-blog"></i> Blog</a>
                    <a href="#SERVICE" class="px-3 py-1 inline-flex items-center justify-center gap-2 rounded-md hover:bg-blue-400"><i class="fa fa-cogs"></i> Our Service</a>
                    <a href="#TEAM" class="px-3 py-1 inline-flex items-center justify-center gap-2 rounded-md hover:bg-blue-400"><i class="fa fa-users"></i> About Us</a>
                    <a href="#CONTACT" class="px-3 py-1 inline-flex items-center justify-center gap-2 rounded-md hover:bg-blue-400"><i class="fa fa-envelope"></i> Contact Us</a>
                </div>
                <!-- Toggle Menu -->
                <div x-show="open" @click.away="open = false" class="absolute top-16 left-0 w-full bg-blue-500 bg-opacity-50 rounded-md shadow-lg" :class="open ? 'max-lg:block': 'max-lg:hidden'">
                    <div class="flex flex-col items-center">
                        <a href="#HOME" class="px-3 py-2 text-white hover:bg-blue-400 w-full text-center">Home</a>
                        <a href="#WORK" class="px-3 py-2 text-white hover:bg-blue-400 w-full text-center">Portfolio</a>
                        <a href="#BLOG" class="px-3 py-2 text-white hover:bg-blue-400 w-full text-center">Blog</a>
                        <a href="#SERVICE" class="px-3 py-2 text-white hover:bg-blue-400 w-full text-center">Our Service</a>
                        <a href="#TEAM" class="px-3 py-2 text-white hover:bg-blue-400 w-full text-center">About Us</a>
                        <a href="#CONTACT" class="px-3 py-2 text-white hover:bg-blue-400 w-full text-center">Contact Us</a>
                    </div>
                </div>
            </div>
        </header>
        {{ $slot }}
        <footer class="mt-10 lg:mt-20 py-2 bg-blue-500 text-white font-bold flex justify-between items-center">
            <div class="container px-6 mx-auto text-center">
                © {{ date('Y') }} All rights reserved.
            </div>
        </footer>
        @vite('resources/js/app.js')
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
