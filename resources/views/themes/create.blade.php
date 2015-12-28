@extends('layouts.dashboard')

@section('title')
    THEME ADMIN
@stop

@section('dash_content')

    {!! Form::open(['url' => 'backend/themes']) !!}
        
        <div class="col-sm-4">
            <div class="form-group">
                <h6>{!! Form::label('Hex', 'Hex:') !!}</h6>
                {!! Form::text('hex',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <h6>{!! Form::label('Color', 'Color:') !!}</h6>
                {!! Form::text('color',null,['class'=>'form-control']) !!}
            </div>
            <h6>{!! Form::label('Product IDs', 'Utilizing Product IDs') !!}</h6>
            <p>You may assign this theme in the <a href="/backend/products">product dashboard</a>, once theme has been saved.</p>


        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <h6>{!! Form::label('Headline', 'Headline') !!}</h6>
                {!! Form::text('headline',null,['class'=>'form-control']) !!}
            </div>
             <div class="form-group">
                <h6>{!! Form::label('Sm-Headline', 'Sm-Headline:') !!}</h6>
                {!! Form::text('smHeadline',null,['class'=>'form-control']) !!}
            </div>
             <div class="form-group">
                <h6>{!! Form::label('Body', 'body:') !!}</h6>
                {!! Form::text('body',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('SAVE', ['class' => 'btn btn-success form-control']) !!}
            </div>
        </div>

    {!! Form::close() !!}

@stop