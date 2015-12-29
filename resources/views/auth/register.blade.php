@extends('layouts.auth')

@section('title')
    REGISTER
@stop

@section('form')
  <form method="POST" action="/backend/register">
      {!! csrf_field() !!}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="password">Confirm Password</label>
      <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
    </div>
    <button type="submit" class="btn btn-success">REGISTER</button>
  </form>

  <div class='col-sm-12'>
    <hr>
    <p>Already a member?</p>
    <a href="/backend/login"><button class="btn btn-primary btn-brand">Login</button></a>
  </div>
@stop