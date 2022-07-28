@extends('layout')
@section('body')
@include('nav')
<div class="container py-5">
    <h1>Register with new Account</h1>
    <form action="{{url('user/create')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            <div class="@if($errors->has('name') ) alert alert-danger @endif">{{ $errors->first('name') }}</div>
        </div>
        @include('user.form')
        <button type="submit" class="btn btn-success my-4 rounded-0">Register</button>
    </form>
    <div class="text-center">
        <a class="text-primary" href="{{url('login')}}">Are you already have email?</a>
    </div>
</div>
@endsection