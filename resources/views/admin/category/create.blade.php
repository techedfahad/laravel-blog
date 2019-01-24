@extends('layouts.admin')

@section('title')
    Create Category
@stop

@section('content')

    <h3>Create Category</h3>

    @include('include.form_error')

    {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoryController@store']) !!}

        <div class="form-group">
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
        </div>

        {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop