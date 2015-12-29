@extends('layouts.dashboard')

@section('title')
    THEMES ADMIN
@stop

@section('dash_content')
  <div class='col-sm-12'>
    <h4>Themes <span class="badge">{{ count($themes) }}</span></h4>
    <hr>       
    <table class="table table-condensed table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Hex</th>
          <th>Color</th>
          <th>Headline</th>
          <th>Small Headline</th>
          <th>Body</th>
          <th>Products ID</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($themes as $theme)
        <tr>
          <td><a href="{{ route('backend.themes.show', [$theme->id]) }}">{{ $theme->id }}</a></td>
          <td>{{ $theme->hex }}</td>
          <td>{{ $theme->color }}</td>
          <td>{{ $theme->headline }}</td>
          <td>{{ $theme->sm_headline }}</td>
          <td>{{ $theme->body }}</td>
          <td>
            @foreach ($theme->products as $product)
              <a href="{{ route('backend.products.show', [$product->id]) }}">{{ $product->id }}</a><br>
            @endforeach
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <div class='col-sm-12'>
      {!! $themes->render() !!}<hr>
      <a href="{{ route('backend.themes.create') }}"><button class="btn btn-success">+ New Theme</button></a>
    </div>
  </div>
@stop