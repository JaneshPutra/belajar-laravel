@extends('layouts.mainlayout')
@section('title', 'Edit Student')
@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/student/{{$student->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>Gender
                    <option value="{{$student->gender}}">{{$student->gender}}</option>
                    @if ($student->gender == 'L')
                        <option value="P">P</option>
                    @else
                        <option value="L">L</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="nis">Nis</label>
                <input type="number" class="form-control" name="nis" id="nis" value="{{$student->nis}}" required>
            </div>
            <div class="mb-3">
                <label for="asal">Asal Kota</label>
                <input type="text" class="form-control" name="asal" id="asal" value="{{$student->asal}}" required>
            </div>
            <div class="mb-3">
                <label for="no_hp">No. Handphone</label>
                <input type="number" class="form-control" name="no_hp" id="no_hp" value="{{$student->no_hp}}" required>
            </div>
            <div class="mb-3">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" name="photo" id="photo" value="{{$student->image}}">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection