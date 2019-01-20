@extends('layouts.admin')

@section('title')
    Posts
@stop

@section('content')

    <h1>Posts</h1>



         <table class="table">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>User</th>
                 <th>Category</th>
                 <th>Photo</th>
                 <th>Title</th>
                 <th>Content</th>
                 <th>Created At</th>
                 <th>Updated At</th>
               </tr>
             </thead>
             <tbody>
             @foreach($posts as $post)

               <tr>
                 <td>{{$post->id}}</td>
                 <td>{{$post->user->name}}</td>
                 <td>{{$post->category->name}}</td>
                 <td><img src="{{$post->photo->name}}" height="50" width="50"></td>
                 <td>{{$post->title}}</td>
                 <td>{{$post->body}}</td>
                 <td>{{$post->created_at->diffForHumans()}}</td>
                 <td>{{$post->updated_at->diffForHumans()}}</td>

               </tr>

             @endforeach
             </tbody>
           </table>



@stop