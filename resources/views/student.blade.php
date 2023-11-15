@extends('layouts.mainlayout')
@section('title', 'Student')
@section('content')


    <div class=" mt-24 mx-5 fixed top-0">
        <a class="" href="/student-add">
            <button class=" text-white flex right-0 rounded-2xl bg-green-600 py-2 px-7 text-sm font-semibold">Add
                Data</button>
        </a>
    </div>

    <div class=" mx-4 gap-9 pt-20 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($studentlist as $student)
            <div class=" pb-5">
                <img src="{{ asset('storage/photo/' . $student->image) }}" alt=""
                    class=" w-full h-44 object-cover rounded-xl">
                <h6 class="text-[#8BC53F] mt-3 ml-2 text-xs ">nis : {{ $student->nis }}</h6>
                <h3 class=" font-bold text-2xl mt-2">{{ $student->name }}</h3>
                <ul class="flex items-center gap-2 mt-2">
                    <li>
                        <img src="{{ asset('images/lokasi.svg') }}" alt="">
                    </li>
                    <li class="gap-5">
                        <h6 class="text-sm"> {{ $student->asal }}</h6>
                    </li>
                </ul>

                <a href="{{ url('/student-detail/' . $student->id) }}">
                    <button
                        class="rounded-[17px] w-full py-2 px-1 items-center justify-center mt-3 text-black bg-transparent border-2 hover:bg-black hover:text-white">
                        Detail
                    </button>
                </a>
                <div class=" mt-3 flex gap-2">
                    <a href="/student-edit/{{ $student->id }}">
                        <button
                            class= " border-2 w-36 rounded-[17px] py-1 hover:text-white hover:bg-yellow-500">Edit</button>
                    </a>
                    
                    <form style="display: inline-block" action="/student-destroy/{{ $student->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"
                            class="border-2 w-32 rounded-[17px] py-1 hover:text-white hover:bg-red-700">Delete</button>
                    </form>

                </div>
            </div>
        @endforeach
    </div>

@endsection
