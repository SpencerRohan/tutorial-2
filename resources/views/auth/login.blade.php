@extends('layouts.auth')

@section('title')
    LOGIN
@stop

@section('form')
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="remember">Remember Me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>
    </form>
@stop