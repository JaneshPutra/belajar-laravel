@extends('layouts.mainlayout')
@section('title', 'Detail Student')
@section('content')

    <div id="navbar-container"></div>
    <div class="container px-6 py-2 max-w-md lg:max-w-xl mt-20 mx-auto">
        <img class=" w-full h-64 object-cover rounded-3xl " src="{{ asset('storage/photo/' . $student->image) }}">
        <h6 class="text-[#8BC53F] mt-3 ml-2">nis: {{ $student->nis }}</h6>
        <h4 class="text-3xl font-bold mt-2 ml-2">{{ $student->name }}</h4>

        @if ($student->gender == 'P')
        <h6 class="text-[#F97316] mt-3 ml-2">gender : Perempuan</h6>
        @elseif ($student->gender == 'L')
        <h6 class="text-[#0EA5E9]  mt-3 ml-2">gender : Laki-Laki</h6>
        @else
            Tidak ada data yang cocok
        @endif
        <ul class="flex items-center gap-3 ml-2 mt-3">
            <li>
                <img src="{{ asset('images/lokasi.svg') }}" alt="">
            </li>
            <li>
                <h6 class="text-[#64748B]">{{ $student->asal }}</h6>
            </li>
            <li>
                <h6 class="text-[#64748B]">nomor telepon : </h6>
            </li>
            <li>
                <h6 class="text-[#64748B]">{{ $student->no_hp }}</h6>
            </li>
        </ul>

        <p class="mt-2 ml-2 text-[#64748B]">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo sapien vitae euismod cursus. Sed blandit
            ante vel lorem ultricies, vel fermentum augue tristique. Mauris et lacus a turpis fermentum vehicula. Nullam
            interdum bibendum odio, pharetra consectetur erat malesuada vitae.
        </p>
        <p class="mt-2 ml-2 text-[#64748B]">
            Vestibulum euismod ex sit amet lacinia lacinia. Nulla facilisi. Proin mi tortor, facilisis in cursus vel,
            commodo at ante. Vestibulum porttitor hendrerit risus, in gravida ante feugiat id. Sed dignissim ornare mi
            sed suscipit. Donec vel viverra lectus. Nulla facilisis aliquam tellus eget egestas. Suspendisse potenti.
        </p>
        <p class="mt-2 ml-2 text-[#64748B]">
            Etiam condimentum sed massa nec mattis. Morbi odio mauris, fermentum eu volutpat vel, rutrum eget lorem.
        </p>

        <div class="flex mt-7 gap-8 my-3 ">
            <a href="/student">
            <button class="bg-[#0F172A] text-white rounded-xl px-6 py-2">back</button>
        </a>
        </div>
    </div>
@endsection
