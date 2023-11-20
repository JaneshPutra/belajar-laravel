<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
     <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <footer class="py-6 dark:bg-gray-800 dark:text-gray-50" id="footer">
        <div class="container px-6 mx-auto space-y-6 divide-y divide-gray-400 md:space-y-12 divide-opacity-50">
            <div class="grid grid-cols-12">
                <div class="pb-6 col-span-full md:pb-0 md:col-span-5">
                    <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 md:justify-start">
                        <div class="flex items-center justify-center w-64 h-auto rounded-full">
                           <img src="{{asset('images/logdown.svg')}}" alt="">
                        </div>
                    </a>
                    <ul>
                        <p class="text-center md:w-3/5 md:text-left lg:text-left lg:w-3/5 w-full pt-2 mx-100 text-sm">Nearme
                            adalah sebuah aplikasi karangan anak bangsa
                            yang ingin menjadi pemuda sukses.
                            Silahkan kerjakan tugas yang diberikan agar tidak
                            menyesal di akhri waktu nanti.
                        </p>
                    </ul>
                </div>
                <div class="col-span-4 text-center md:text-left md:col-span-2">
                    <p class="pb-1 text-lg font-medium">COMPANY</p>
                    <ul>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-[#007A98] text-gray-400">
                                About us</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#"
                                class="hover:dark:text-[#007A98] text-gray-400">Blog</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#"
                                class="hover:dark:text-[#007A98] text-gray-400">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-4 text-center md:text-left md:col-span-2">
                    <p class="pb-1 text-lg font-medium">PRODUCT</p>
                    <ul>
                        <li>
                            <a rel="noopener noreferrer" href="#"
                                class="hover:dark:text-[#007A98] text-gray-400">Nearme</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#"
                                class="hover:dark:text-[#007A98] text-gray-400">Nearby</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#"
                                class="hover:dark:text-[#007A98] text-gray-400">Near</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-4 text-center md:text-left md:col-span-2">
                    <p class="pb-1 text-lg font-medium">EXPLORE</p>
                    <ul>
                        <li>
                            <a rel="noopener noreferrer" href="#"
                                class="hover:dark:text-[#007A98] text-gray-400">Event</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#"
                                class="hover:dark:text-[#007A98] text-gray-400">Venue</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid justify-center pt-6 lg:justify-between">
                <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                    <span class="text-gray-400">©2023,Nearme</span>
                    <a rel="noopener noreferrer" href="#">
                        <span class="text-gray-400">Terms of Service</span>
                    </a>
                    <a rel="noopener noreferrer" href="#">
                        <span class="text-gray-400">Privacy Policy</span>
                    </a>
                </div>
                <div class="flex justify-center pt-4 space-x-1 lg:pt-0 lg:col-end-13 items-center">
                    <h4 class="text-[#CBD5E1] text-xs">Follow Us On</h4>
                    <a rel="noopener noreferrer" href="#" title="Email"
                        class="flex items-center justify-center w-10 h-10 rounded-full dark:text-gray-900">
                       <img src="{{asset('images/twiter.svg')}}" alt="">
                    </a>
                    <a rel="noopener noreferrer" href="#" title="Twitter"
                        class="flex items-center justify-center w-10 h-10 rounded-full dark:text-gray-900">
                      <img src="{{asset('images/intagram.svg')}}" alt="">
                    </a>
                    <a rel="noopener noreferrer" href="#" title="GitHub"
                        class="flex items-center justify-center w-10 h-10 rounded-full dark:text-gray-900">
                        <img src="{{('images/fecbok.svg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
