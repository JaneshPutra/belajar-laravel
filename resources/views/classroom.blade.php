@extends('layouts.mainlayout')
@section('title', 'ClassRoom')
@section('content')

<h1>Ini Halaman Class Room</h1>
<h2>Class List</h2>


<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>Name</th>
        </tr>
    </thead>
    <body>
        @foreach($classlist as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
        </tr>
        @endforeach
    </body>
</table>
@endsection