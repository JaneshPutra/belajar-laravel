@extends('layouts.mainlayout')
@section('title', 'Add New Student')
@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="student" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
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
                <input type="number" class="form-control" name="nis" id="nis" required>
            </div>
            <div class="mb-3">
                <label for="asal">Asal Kota</label>
                <input type="text" class="form-control" name="asal" id="asal" required>
            </div>
            <div class="mb-3">
                <label for="no_hp">No Handphone</label>
                <input type="number" class="form-control" name="no_hp" id="n0_hp" required>
            </div>
            <div class="mb-3">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection