@extends('layouts.mainlayout')
@section('title', 'Student')
@section('content')

    <div class=" mt-24 mx-5 fixed top-0 z-50">
        <a class="" href="/student-add">
            <button class=" text-white flex right-0 rounded-2xl bg-green-600 py-2 px-7 text-sm font-semibold">Add
                Data</button>
        </a>
    </div>

    {{-- search atau filter  --}}
    <form action="/student" method="GET">
        <div
            class="mt-32 flex justify-center items-center py-2 gap-3 shadow-lg w-[95%] mx-auto rounded-full sm:w-[60%] md:w-[50%] lg:w-[40%]">
            <img src="{{ asset('images/search-normal.svg') }}" alt="">
            <input type="text" placeholder="Data" class="w-[60%]" name="search" value="{{ request('search') }}">
            <button type="submit"
                class="bg-[#94A3B8] text-white rounded-full py-2 px-3 hover:bg-black hover:text-white">cari data</button>
        </div>
    </form>


    <div class=" mx-4 gap-9 pt-20 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($studentlist as $student)
            <div class=" pb-3">
                <img src="{{ asset('storage/photo/' . $student->image) }}" alt=""
                    class=" w-full h-44 object-cover rounded-xl" data-tilt>
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
                        class="rounded-[17px] w-full py-1 px-1 items-center justify-center mt-3 text-black bg-[#F1F5F9] border-2 hover:text-white hover:bg-black">
                        Detail
                    </button>
                </a>
                <div class=" mt-3 flex gap-2">
                    <a href="/student-edit/{{ $student->id }}">
                        <button
                            class=" border-2 w-36 rounded-[17px] py-1 bg-[#F1F5F9]  hover:text-white hover:bg-yellow-500">Edit</button>
                    </a>

                    <button
                        class="border-2 w-32 rounded-[17px] py-1 bg-[#F1F5F9]  hover:text-white hover:bg-red-700 delete-btn"
                        data-id="{{ $student->id }}">Delete</button>
                </div>
            </div>
        @endforeach
    </div>

    <div class=" d-flex justify-content-end mx-5 mt-4">
        {{ $studentlist->links() }}
    </div>

    <script type="text/javascript" src={{'js/vanilla-tilt.min.js'}}></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.onload = function() {
            Alpine.start();
        };
    
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-btn')) {
                e.preventDefault();
                var studentId = e.target.getAttribute('data-id');
    
                @guest
                window.location.href = '/login';
                @else
    
                Swal.fire({
                    title: 'Apakah Anda yakin untuk menghapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Hapus',
                    customClass: {
                        popup: 'sm:w-2/3 lg:w-1/3',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Hapus elemen secara langsung dari DOM
                        e.target.closest('.pb-3').remove();
    
                        // Kirim permintaan penghapusan ke server
                        fetch('/student-destroy/' + studentId, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        }).then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    title: 'Berhasil',
                                    text: 'Data berhasil dihapus',
                                    icon: 'success',
                                });
                            } else {
                                Swal.fire({
                                    title: 'Gagal Menghapus',
                                    text: 'Terjadi kesalahan saat menghapus data',
                                    icon: 'error',
                                });
                            }
                        });
                    }
                });
                @endguest
            }
        });
    </script>
    

@endsection
