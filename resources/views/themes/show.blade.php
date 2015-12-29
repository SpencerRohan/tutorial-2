@extends('layouts.dashboard')

@section('title')
    THEME ADMIN
@stop

@section('dash_content')

  <h4>Theme ID: {{ $theme->id }}</h4>
  <hr>       
  <div class='col-sm-4'>
    <ul class="list-group">
        <h6>Hex:</h6>
        <li class="list-group-item" style="color: {{ $theme->hex}}">
          {{ $theme->hex }}
        </li>
        <h6>Color:</h6>
        <li class="list-group-item" style="color: {{ $theme->color}}">
          {{ $theme->color }}
        </li>
        <h6>Utilizing Product IDs: </h6>
        @if (count($theme->products) == 0)
          <li class="list-group-item">
            There are no products currently using this theme. You may adjust this in the <a href="/backend/products">product dashboard</a>.
          </li>
        @endif
        @foreach ($theme->products as $product)
          <li class="list-group-item">
            <a href="/backend/products/{{$product->id}}">{{ $product->id }}</a>
          </li>
        @endforeach     
    </ul>
  </div>
  <div class='col-sm-4'>
    <ul class="list-group">
        <h6>Headline:</h6>
        <li class="list-group-item" style="font-family: '{{ $theme->headline}}'">
          {{ $theme->headline }}
        </li>
        <h6>Sm-Headline:</h6>
        <li class="list-group-item" style="font-family: '{{ $theme->sm_headline }}'">
          {{ $theme->sm_headline }}
        </li>
        <h6>Body:</h6>
        <li class="list-group-item" style="font-family: '{{ $theme->body }}'">
          {{ $theme->body}}
        </li>
    </ul>
  </div>
  <div class='col-sm-4'>
    <ul class="list-group">
        <h6>Created At:</h6>
        <li class="list-group-item">
          {{ $theme->created_at }}
        </li>
        <h6>Updated At:</h6>
        <li class="list-group-item">
          {{ $theme->updated_at }}
        </li>
    </ul>
    
    <a href="/backend/themes/{{ $theme->id }}/edit"><button class="btn btn-success">EDIT</button></a>
    {!! Form::open(['method' => 'DELETE', 'route'=>['backend.themes.destroy', $theme->id]]) !!}
      <br>{!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>


@stop