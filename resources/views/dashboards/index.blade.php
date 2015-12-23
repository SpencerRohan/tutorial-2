@extends('layouts.dashboard')

@section('title')
    ACME ADMIN
@stop

@section('dash_content')
  <h4>Dashboard Main</h4>
  <hr>
  <div class='col-sm-4'>
    <h4>Count</h4>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge">{{ count($users) }}</span>
        Total Users
      </li>
      <li class="list-group-item">
        <span class="badge">{{ count($admins) }}</span>
        Total Admins
      </li>
      <li class="list-group-item">
        <span class="badge">{{ count($themes) }}</span>
        Total Themes
      </li>
      <li class="list-group-item">
        <span class="badge">{{ count($products) }}</span>
        Total Products
      </li>
    </ul>
  </div>

  <div class='col-sm-4'>
    <h4>Product Lines</h4>
    <ul class="list-group">
      @foreach ($products as $product)
        <li class="list-group-item">
          Product: {{ $product->name }}<br>
          Theme ID: {{ $product->theme->id }}<br>
          Layout: {{ $product->layout }}
        </li>
      @endforeach
    </ul>
  </div>

  <div class='col-sm-4'>
    <h4>Themes</h4>
    <ul class="list-group">
      @foreach ($themes as $theme)
        <li class="list-group-item">
          ID: {{ $theme->id }}<br>
          Color: {{ $theme->color }}<br>
          Headline: {{ $theme ->smHeadline }}
        </li>
      @endforeach
    </ul>
  </div>
@stop
