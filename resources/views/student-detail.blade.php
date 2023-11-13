@extends('layouts.mainlayout')
@section('title', 'Detail Student')
@section('content')

    
    <table class = "table">
        
        <tr>
        <h1>Anda Sedang Melihat Data Siswa {{$student->name}}</h1>
            <th>Nama</th>
            <th>Gender</th>
            <th>Nis</th>
            <th>Asal Kota</th>
            <th>No. Handphone</th>
        </tr>
        <tr>
            <td>{{$student -> name}}</td>
            <td>{{$student -> gender}}</td>
            <td>{{$student -> nis}}</td>
            <td>{{$student -> asal}}</td>
            <td>{{$student -> no_hp}}</td>
        </tr>
    </table>
    <h4>Foto Siswa</h4>
    <div class="my-3">
        @if($student->image !='')
            <img src="{{asset('storage/photo/'.$student->image)}}" width="150px">
        @else
            <img src="{{asset('images/profile.jpg')}}" width="150px">
        @endif
    </div>
@endsection