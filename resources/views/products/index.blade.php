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
          <td><a href="{{ route('backend.products.show', [$product]) }}">{{ $product->id }}</a></td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->code }}</td>
          <td>{{ $product->layout }}</td>
          <td>
          @if ($product->theme_id != null)
            <a href="{{ route('backend.themes.show', [$product->theme_id]) }}">{{ $product->theme_id }}</a>
          @endif
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <div class='col-sm-12'>
      {!! $products->render() !!}<hr>
      <a href="{{ route('backend.products.create') }}"><button class="btn btn-success">+ New Product</button></a>
    </div>
  </div>
@stop