@extends('layouts.admin')

@section('title')
    Edit Post
@stop

@section('content')
    <h3>Edit Post</h3>

    @include('include.form_error')

    <div class="col-sm-3">
        <img src="{{$post->photo->name}}" alt="post image" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">

    {!! Form::model($post,['method' => 'PUT', 'action' => ['AdminPostController@update',$post->id],'files'=> true]) !!}

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

    {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-md-6']) !!}

    {!! Form::close() !!}



    {!! Form::open(['method'=>'DELETE','action'=>['AdminPostController@destroy',$post->id]]) !!}

        {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-md-6']) !!}

    {!! Form::close() !!}

    </div>

@stop