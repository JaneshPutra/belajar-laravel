@extends('layouts.mainlayout')
@section('title', 'Add New Student')
@section('content')

    <section class="p-7 dark:text-gray-50">
        <form method="post" action="student" class="flex flex-col mx-auto space-y-12" enctype="multipart/form-data">
            @csrf
<<<<<<< HEAD
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text"  id="name" name="name" 
                class="form-control @error('name') is-invalid @enderror" autofocus>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>Gender
                    <option value="">-Select One-</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nis">Nis</label>
                <input type="number" name="nis" id="nis"
                class="form-control @error('nis') is-invalid @enderror" autofocus>
                @error('nis')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">  
                <label for="asal">Asal Kota</label>
                <input type="text" name="asal" id="asal"
                class="form-control @error('asal') is-invalid @enderror" autofocus>
                @error('asal')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3"> 
                <label for="no_hp">No Handphone</label>
                <input type="number" name="no_hp" id="no_hp"
                class="form-control @error('no_hp') is-invalid @enderror" autofocus>
                @error('no_hp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="photo">Photo</label>
                <input type="file" id="photo" name="photo"
                class="form-control @error('image') is-invalid @enderror" autofocus>
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
=======
            <fieldset class="grid w-1/2 grid-cols-4 gap-6 p-6 rounded-md shadow-2xl mx-auto dark:bg-white">
                <div class="space-y-2 col-span-full lg:col-span-1">
                    <p class="font-medium text-black">add Data</p>
                    <p class="text-xs text-black">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga
                        autem eum!</p>
                </div>
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                    <div class="col-span-full sm:col-span-3">
                        <label for="firstname" class="text-sm text-black">name</label>
                        <input id="name" name="name" type="text" placeholder="name"
                            class=" py-2 px-2 w-full rounded-md focus:ring focus:ri focus:ri border-2 dark:border-[#E2E8F0] dark:text-gray-900 form-control @error('name') is-invalid @enderror"
                            autofocus>
>>>>>>> a074122d92d4e230a196998716b94ceb9f690584

                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-full sm:col-span-3">
                        <label for="gender" class="text-sm text-black">Gender</label>
                        <select name="gender" id="gender"
                            class="text-black py-2 px-2 form-control w-full rounded-md focus:ring focus:ri focus:ri border-2 dark:border-[#E2E8F0] dark:text-gray-900"
                            required>Gender
                            <option value="">-Select One-</option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>

                    <div class="col-span-full sm:col-span-3">
                        <label for="email" class="text-sm text-black">Nis</label>
                        <input id="nis" type="number" name="nis" placeholder="Nis"
                            class=" py-2 px-2 w-full rounded-md focus:ring focus:ri focus:ri dark:border-[#E2E8F0] border-2 dark:text-gray-900 form-control @error('nis') is-invalid @enderror"
                            autofocus>
                        @error('nis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-full sm:col-span-3">
                        <label for="no_hp" class="text-sm text-black">No Handphone</label>
                        <input id="no_hp" type="number" name="no_hp" placeholder="no handphone"
                            class="py-2 px-2 w-full rounded-md focus:ring focus:ri focus:ri border-2 dark:border-[#E2E8F0] dark:text-gray-900 form-control @error('no_hp') is-invalid @enderror"
                            autofocus>
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-span-full">
                        <label for="asal" class="text-sm text-black">asal kota</label>
                        <input id="asal" type="text" name="asal" placeholder="asal kota"
                            class="py-2 px-2 w-full rounded-md focus:ring focus:ri focus:ri border-2 dark:border-[#E2E8F0] dark:text-gray-900 form-control @error('asal') is-invalid @enderror"
                            autofocus>
                        @error('asal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-full sm:col-span-2">
                        <input type="file" name="photo" id="photo"
                            class="form-control px-2 py-5 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>

                    <div class="items-center flex flex-wrap ml-48">
                        <button type="submit"
                            class=" btn btn-success px-4 py-2 border bg-green-400 rounded-md hover:bg-green-500">Save</button>
                    </div>

                </div>
            </fieldset>
        </form>
    </section>
@endsection
