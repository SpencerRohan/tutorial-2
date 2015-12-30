@extends('layouts.dashboard')

@section('title')
    USERS ADMIN
@stop

@section('dash_content')
  {!! Form::open(['route'=>['backend.users.store']]) !!}
     {!! csrf_field() !!}

      <div class="col-sm-4">
        <div class="form-group">
            <h6>{!! Form::label('Name', 'Name:') !!}</h6>
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <h6>{!! Form::label('Email', 'Email:') !!}</h6>
            {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <h6>{!! Form::label('Password', 'Password:') !!}</h6>
            {!! Form::text('password',null,['class'=>'form-control']) !!}
        </div>
                <div class="form-group">
            <h6>{!! Form::label('Confirm Password', 'Confirm Password:') !!}</h6>
            {!! Form::text('password_confirmation',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <h6>{!! Form::label('is_admin', 'Make Admin:') !!}
            {!! Form::Checkbox('is_admin', '1', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('SAVE', ['class' => 'btn btn-success form-control']) !!}
        </div>
      </div>

    {!! Form::close() !!}
@stop