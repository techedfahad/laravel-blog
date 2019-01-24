@extends('layouts.admin')

@section('title')
    All Categories
@stop

@section('content')
    <h2>All Categories</h2>

     <table class="table">
         <thead>
           <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Created</th>
             <th>Action</th>
           </tr>
         </thead>
         <tbody>

         @foreach($categories as $category)

           <tr>
             <td>{{$category->id}}</td>
             <td class="text-capitalize"><a href="{{route('category.edit',$category->id)}}">{{$category->name}}</a></td>
             <td>{{$category->created_at->diffForHumans()}}</td>
             <td>
                 <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal-{{$category->id}}">&times;</button>
             </td>

               <div class="modal fade" id="delete-modal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteUser" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="deleteUserLabel"><b>Confirm Deleting Category</b></h5>

                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>

                           <div class="modal-body">
                               <p> Do you really want to <strong> delete </strong> category <strong>{{$category->name}}</strong>?</p>
                           </div>
                           <div class="modal-footer">


                               {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoryController@destroy', $category->id]]) !!}

                               <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                               <button type="submit" class="btn btn-danger">Yes</button>

                               {!! Form::close() !!}

                           </div>
                       </div>
                   </div>
               </div>
           </tr>

         @endforeach

         </tbody>
       </table>

@stop