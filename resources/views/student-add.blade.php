@extends('layouts.mainlayout')
@section('title', 'Add New Student')
@section('content')


    <div class="mt-5 col-8 m-auto">
        <form action="student" method="post" enctype="multipart/form-data">
            @csrf
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
                <input type="file" id="photo" name="photo" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection