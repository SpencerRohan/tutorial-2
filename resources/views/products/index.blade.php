@extends('layouts.dashboard')

@section('title')
    PRODUCTS ADMIN
@stop

@section('dash_content')
  <div class='col-sm-12'>
    <h4>Products <span class="badge">{{ count($products) }}</span></h4>
    <hr>       
    <table class="table table-condensed table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Code</th>
          <th>Layout</th>
          <th>Theme ID</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($products as $product)
        <tr>
          <td><a href="products/{{ $product->id }}">{{ $product->id }}</a></td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->code }}</td>
          <td>{{ $product->layout }}</td>
          <td><a href="themes/{{ $product->theme->id }}">{{ $product->theme->id }}</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@stop