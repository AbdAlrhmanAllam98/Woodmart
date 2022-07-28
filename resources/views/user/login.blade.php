@extends('layout')
@section('body')
@include('nav')
<div class="container py-5">
    <h1>Login</h1>
    <form action="{{url('user/login')}}" method="POST">
        @csrf
        @include('user.form')
        <button type="submit" class="btn btn-success my-4 rounded-0">Login</button>
    </form>
    <div class="text-center">
        <a class="text-primary" href="{{url('register')}}">Are you not have email?</a>
    </div>
</div>
@endsection