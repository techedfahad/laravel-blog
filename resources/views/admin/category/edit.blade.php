@extends('layouts.admin')

@section('title')
    Edit Category
@stop

@section('content')

    <h3>Update Category</h3>

    @include('include.form_error')

    {!! Form::model($category,['method' => 'PUT', 'action' => ['AdminCategoryController@update',$category->id]]) !!}

    <div class="form-group">
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
    </div>

    {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop