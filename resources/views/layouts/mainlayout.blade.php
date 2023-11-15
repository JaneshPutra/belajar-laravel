<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | @yield('title')</title>
{{-- 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <header class="p-2 dark:bg-white dark:text-black w-full fixed top-0 " id="navbar">
        <div class="flex justify-between h-12 mx-auto">
            <div class="flex gap-12">
                <a rel="" href="#" aria-label="Back to homepage" class="flex items-center p-2">
                    <img src="{{ asset('images/Logo.svg') }}" alt="Deskripsi Gambar">
                </a>
                <ul class="items-stretch hidden space-x-3 lg:flex">
                    <li class="flex">
                        <a rel="noopener noreferrer" href="/"
                            class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent  hover:text-[#007A98] hover:font-bold">Home</a>
                    </li>
                    <li class="flex">
                        <a rel="noopener noreferrer" href="/student"
                            class="flex items-center px-4 -mb-1 border-b-2 dark:border-transparent hover:text-[#007A98] hover:font-bold">Student</a>
                    </li>
                </ul>
            </div>
            <div class="items-center hidden lg:flex gap-2">
                <a href="/logout">
                    @auth
                        <button
                            class=" rounded-full p-1 w-28 border-2 border-slate-700 hover:bg-black hover:text-white">LogOut</button>
                    @endauth
                </a>
                <a href="/login">
                    @guest
                        <button
                            class="rounded-full p-1 w-28 border-2 border-slate-700 hover:bg-black hover:text-white">Login</button>
                    @endguest
                </a>
            </div>


            <button id="dropdownButton" class="p-4 lg:hidden text-black ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6 dark:text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <ul id="dropdownList"
                    class="hidden bg-white drop-shadow-md mt-2 py-2 px-14 rounded-2xl absolute right-0">
                    <div class="m-1 space-y-2">
                        <li>
                            <a class="text-sm text-[#94A3B8] hover:text-[#007A98]" href="/">Home</a>
                        </li>
                        <li>
                            <a class="text-sm text-[#94A3B8] hover:text-[#007A98]" href="/student">Student</a>
                        </li>
                        <li>
                            @auth
                            <a class="text-sm text-[#94A3B8] hover:text-[#007A98]" href="/logout">Logout</a>
                            @endauth
                        </li>
                        <li>
                            @guest
                            <a class="text-sm text-[#94A3B8] hover:text-[#007A98]" href="/login">Login</a>
                            @endguest
                        </li>
                    </div>
                </ul>
            </button>
            <script>
                const dropdownButton = document.getElementById('dropdownButton');
                const dropdownList = document.getElementById('dropdownList');

                dropdownButton.addEventListener('click', () => {
                    if (dropdownList.classList.contains('hidden')) {
                        dropdownList.classList.remove('hidden');
                    } else {
                        dropdownList.classList.add('hidden');
                    }
                });

                document.addEventListener('click', (event) => {
                    if (!dropdownButton.contains(event.target) && !dropdownList.contains(event.target)) {
                        dropdownList.classList.add('hidden');
                    }
                });
            </script>
        </div>
    </header>
    <div class=" mt-24">
        @yield('content')
    </div>



    <!-- javacript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
