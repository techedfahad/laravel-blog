@extends('layouts.admin')
@section('title')
    Edit User
@stop

@section('content')
    <h1>Edit User</h1>

    @include('include.form_error')

    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->name : '/images/image-placeholder.jpeg'}}" alt="User Image" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">

    {!! Form::model($user,['method'=>'PUT','action'=>['AdminUserController@update',$user->id],'files'=>'true']) !!}

    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',$roles, null,['class'=>'form-control text-capitalize', 'placeholder'=>'Select Role']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status:') !!}
        {!! Form::select('is_active', ['1'=>'Active','0'=>'Not Active'],null,['placeholder'=>'Select Status','class'=>'form-control']) !!}
        {{--{!! Form::text('is_active', null, ['class'=>'form-control']) !!}--}}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
    </div>

        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>


    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

    </div>

@stop