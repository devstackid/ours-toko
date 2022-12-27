@extends('users.layouts.main')

@section('container')
<div class="container mt-5 text-white">
    <p>{{ auth()->user()->username }}</p>
    <p>{{ auth()->user()->phone }}</p>
    <p>{{ auth()->user()->alamat }}</p>
    <img src="{{ auth()->user()->image }}" alt="">
    <a class="btn btn-light" href="{{ route('profile.edit') }}">Edit Profile</a>
</div>
@endsection