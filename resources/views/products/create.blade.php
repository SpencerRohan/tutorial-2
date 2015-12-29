@extends('layouts.dashboard')

@section('title')
    PRODUCT ADMIN
@stop

@section('dash_content')

    {!! Form::open(['route'=>['backend.products.index']]) !!}
        <div class="col-sm-4">
            <div class="form-group">
                <h6>{!! Form::label('Name', 'Name:') !!}</h6>
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <h6>{!! Form::label('Code', 'Code/URL:') !!}</h6>
                {!! Form::text('code',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <h6>{!! Form::label('Layout', 'Default Layout:') !!}</h6>
                {!! Form::radio('layout', 'default', true, ['class'=>'form-control']) !!}

            </div>
            <div class="form-group">
                <h6>{!! Form::label('Layout', 'Centered Layout:') !!}</h6>
                {!! Form::radio('layout', 'centered', false,  ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <h6>{!! Form::label('Theme ID', 'Theme ID:') !!}</h6>
                {!! Form::select('theme_id', $themeIds, ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <h6>{!! Form::label('Headline', 'Headline:') !!}</h6>
                {!! Form::textarea('headline',"<h1 class='-headline'>HEADLINE HERE</h1><p>TAGLINE HERE</p>",['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <h6>{!! Form::label('Content', 'Content:') !!}</h6>
                {!! Form::textarea('content',"<h3>HEADLINE HERE</h3><p>CONTENT HERE</p>",['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('SAVE', ['class' => 'btn btn-success form-control']) !!}
            </div>
        </div>

    {!! Form::close() !!}

@stop