@extends('layouts.admin')
@section('title')
    Create User
@stop

@section('content')
    <h1>Create User</h1>

    @include('include.form_error')

    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>'true']) !!}

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

        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop