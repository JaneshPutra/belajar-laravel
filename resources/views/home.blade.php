@extends('layouts.mainlayout')
@section('title', 'Home')
@section('content')

<style>
    .fixed-size-image {
    width: 100px; 
    height: 100px; 
    object-fit: cover; 
}
</style>
    @foreach ($studentlist as $student)
    <img src="{{ asset('storage/photo/' . $student->image) }}" alt=""  class="fixed-size-image">

@endforeach
 @endsection