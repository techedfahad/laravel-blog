@extends('layouts.admin')

@section('title')
    Create Post
@stop

@section('content')

    <h3>Create Post</h3>

    @include('include.form_error')

    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostController@store','files'=> true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'Category:') !!}
        {!! Form::select('category_id', $category ,null, ['placeholder' => 'Select Category','class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo', 'Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop