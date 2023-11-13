@extends('layouts.mainlayout')
@section('title', 'Student')
@section('content')

<h1>Ini Halaman Student</h1>
<h3>Student List</h3>
<div class="my-5 ">
    <a href="/student-add" class="btn btn-primary">Add Data Student</a>
</div>

@if(Session::has('status'))
    <div class="alert alert-success col-3 " role="alert">
        {{Session::get('massage')}}
    </div>
@endif
<table class = "table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        @foreach($studentlist as $data)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$data -> name}}</td>
            <td>{{$data -> gender}}</td>
            <td>
                <a href="/student-detail/{{$data->id}}" class="btn btn-info">Detail</a>
                <a href="/student-edit/{{$data->id}}" class="btn btn-warning">Edit</a>
                <a href="/student-delete/{{$data->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>



@endsection