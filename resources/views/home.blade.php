@extends('layouts.mainlayout')
@section('title', 'Home')
@section('content')


<style>
    @keyframes shake {
        0%, 100% {
            transform: translateY(0);
        }
        25%, 75% {
            transform: translateY(-5px);
        }
        50% {
            transform: translateY(5px);
        }
    }

    .shake {
        animation: shake 1.8s ease-in-out infinite;
    }
</style>

    <section class= "dark:text-black">
        <div class="flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-12 lg:flex-row lg:justify-between">
            <div class="flex flex-col justify-center p-6 mx-24 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold leadi sm:text-6xl dark:text-[#0F172A]">Welcome To
                    <span class="dark:text-[#007A98]">Aksacademy</span>
                </h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12">ajgnajg agaigaigag aignaigoagaog nagn9gagoagoamg
                    <br class="hidden md:inline lg:hidden">ajnajgnagaga, afbagbagaigaignagia agiagi
                </p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded dark:text-gray-900 dark:bg-rose-400">view</a>
                    <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-100">ahmad shah farhan</a>
                </div>
            </div>
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="{{asset('images/image 2.png')}}" alt="" class=" shake object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128 ">
            </div>
        </div>
        
    </section>
@endsection
