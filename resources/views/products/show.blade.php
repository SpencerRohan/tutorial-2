@extends('layouts.dashboard')

@section('title')
    PRODUCT ADMIN
@stop

@section('dash_content')

  <h4>Product ID: {{ $product->id }}</h4>
  <hr>       
  <div class='col-sm-4'>
    <ul class="list-group">
        <h6>Name:</h6>
        <li class="list-group-item">
          {{ $product->name }}
        </li>
        <h6>Code:</h6>
        <li class="list-group-item">
          {{ $product->code }}
        </li>
        <h6>Layout:</h6>
        <li class="list-group-item">
          {{ $product->layout }}
        </li>
        <h6>Theme ID: </h6>
        <li class="list-group-item">
          <a href="/backend/themes/{{$product->theme->id}}">{{ $product->theme->id }}</a>
        </li>
    </ul>
  </div>
  <div class='col-sm-4'>
    <ul class="list-group">
        <h6>Headline:</h6>
        <li class="list-group-item">
          {{ $product->headline }}
        </li>
        <h6>Content:</h6>
        <li class="list-group-item">
          {{ $product->content }}
        </li>
    </ul>
  </div>
  <div class='col-sm-4'>
    <ul class="list-group">
        <h6>Created At:</h6>
        <li class="list-group-item">
          {{ $product->created_at }}
        </li>
        <h6>Updated At:</h6>
        <li class="list-group-item">
          {{ $product->updated_at }}
        </li>
    </ul>
    
    <a href="/coyote-reboot/{{ $product->code }}"><button class="btn btn-info">View Product</button></a>
    <a href="/backend/products/{{ $product->id }}/edit"><button class="btn btn-success">EDIT</button></a>
    {!! Form::open(['method' => 'DELETE', 'route'=>['backend.products.destroy', $product->id]]) !!}
      <br>{!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>


@stop