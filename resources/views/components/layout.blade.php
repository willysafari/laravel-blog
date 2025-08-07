<!doctype html>
<head>
<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<style>
    /* smooth scroll */
    html {
        scroll-behavior: smooth;
    }
    
</style>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="./images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                @auth
                <span class="text-xs font-bold uppercase">Welcome Back {{auth()->user()->name}}</span>
                <form method="POST" action="/logout" class="inline-block">
                    @csrf
                    <button type="submit" class="text-xs
                     text-blue-500 font-bold uppercase py-3 px-5 
                     rounded-full bg-blue-50 border
                      border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 ">Logout</button>
                      {{-- text-xs text-blue-500 font-bold uppercase py-3 px-5 rounded-full bg-blue-50 border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 --}}
                </form>
                @else
                <a href="/register" class="text-xs font-bold uppercase py-3 px-4">Register</a>
                <a href="/login" class="text-xs font-bold uppercase py-3 px-4">Login</a>
                @endauth

                <a href="#newsLetter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        
  {{ $slot }}
  
        <footer id="newsLetter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="subemail" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
    @if (session()->has('success'))
        <div x-data="{ show: true }" x-show="show" class="fixed bottom-3 right-3 bg-green-500 text-white px-4 py-2 rounded">
            <p>{{ session('success') }}</p>
            <button @click="show = false" class="ml-2 text-white">Close</button>
        </div>
    @endif
</body>