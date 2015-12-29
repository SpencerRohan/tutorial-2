@extends('layouts.dashboard')

@section('title')
    USERS ADMIN
@stop

@section('dash_content')
  <div class='col-sm-12'>
    <h4>Users <span class="badge">{{ count($users) }}</span></h4>
    <hr>       
    <table class="table table-condensed table-hover">
      <thead>
        <tr>

          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Details</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
          @if ($user->is_admin)
            ADMIN
          @endif
          </td>
          <td>
          @if ($user->is_admin)
            {!! Form::open(['method' => 'PUT', 'route'=>['backend.users.update', $user->id]]) !!}
              {!! Form::hidden('is_admin', 0) !!}
              {!! Form::submit('REMOVE ADMIN STATUS', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
          @else 
            {!! Form::open(['method' => 'PUT', 'route'=>['backend.users.update', $user->id]]) !!}
              {!! Form::hidden('is_admin', 1) !!}
              {!! Form::submit('MAKE ADMIN', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
         @endif
        </td>
          <td>
            {!! Form::open(['method' => 'DELETE', 'route'=>['backend.users.destroy', $user->id]]) !!}
              {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <div class='col-sm-12'>
      {!! $users->render() !!}<hr>
      <a href="/backend/users/create"><button class="btn btn-success">+ New User</button></a>
    </div>
  </div>
@stop