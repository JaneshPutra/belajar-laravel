@extends('layouts.mainlayout')
@section('title', 'Edit Student')
@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/student/{{$student->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">Gender
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
                <input type="number" class="form-control" name="nis" id="nis" value="{{$student->nis}}">
            </div>
            <div class="mb-3">
                <label for="asal">Asal Kota</label>
                <input type="text" class="form-control" name="asal" id="asal" value="{{$student->asal}}">
            </div>
            <div class="mb-3">
                <label for="no_hp">No. Handphone</label>
                <input type="number" class="form-control" name="no_hp" id="no_hp" value="{{$student->no_hp}}">
            </div>
            <div class="mb-3">
                <label for="image">Photo</label>
                <input type="file" class="form-control" name="image" id="image">

                <div class="pt-3">
                    @if ($student->image !='' && file_exists(public_path() . '/storage/photo' . $student->image))
                        <img src="{{url('storage/photo' . $student->image)}}">
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <img src="{{ asset('storage/photo/' . $student->image)}}" width="200px">
            </div>
            @foreach ($errors->all() as $massage)
                {{ $massage }}
            @endforeach
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection