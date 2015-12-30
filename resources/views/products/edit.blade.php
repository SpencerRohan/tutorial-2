@extends('layouts.dashboard')

@section('title')
    PRODUCT ADMIN
@stop

@section('dash_content')


    {!! Form::model($product,['method' => 'PATCH','route'=>['backend.products.update',$product]]) !!}
        
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
                {!! Form::radio('layout', 'default', $product->layout == 'default', ['class'=>'form-control']) !!}

            </div>
            <div class="form-group">
                <h6>{!! Form::label('Layout', 'Centered Layout:') !!}</h6>
                {!! Form::radio('layout', 'centered',  $product->layout == 'centered', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <h6>{!! Form::label('Theme ID', 'Theme ID:') !!}</h6>
                {!! Form::select('theme_id', $themeIds , $product->theme_id, ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <h6>{!! Form::label('Headline', 'Headline:') !!}</h6>
                {!! Form::textarea('headline',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <h6>{!! Form::label('Content', 'Content:') !!}</h6>
                {!! Form::textarea('content',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('UPDATE', ['class' => 'btn btn-success']) !!}
            </div>
        </div>

    {!! Form::close() !!}

@stop