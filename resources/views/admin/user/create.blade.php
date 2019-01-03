@extends('layouts.admin')
@section('title')
    Create User
@stop

@section('content')
    <h1>Create User</h1>

    @if($errors->any())
        <div class="alert alert-dismissable dropdown-alerts alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store']) !!}

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
        {!! Form::select('status', ['1'=>'Active','0'=>'Not Active'],null,['placeholder'=>'Select Status','class'=>'form-control']) !!}
        {{--{!! Form::text('is_active', null, ['class'=>'form-control']) !!}--}}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop