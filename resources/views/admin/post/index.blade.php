@extends('layouts.admin')

@section('title')
    Posts
@stop

@section('content')

    <h1>Posts</h1>

 @if(session('post_updated'))
    <div class="alert alert-success">
        <p>{{session('post_updated')}}</p>
    </div>
 @endif

         <table class="table">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>Photo</th>
                 <th>Posted By</th>
                 <th>Category</th>
                 <th>Title</th>
                 <th>Content</th>
                 <th>Created</th>
                 <th>Updated</th>
               </tr>
             </thead>
             <tbody>
             @foreach($posts as $post)

               <tr>
                 <td>{{$post->id}}</td>
                 <td><img src="{{$post->photo->name}}" height="50" width="50"></td>
                 <td>{{$post->user->name}}</td>
                 <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                 <td><a href="{{route('post.edit', $post->id)}}">{{$post->title}}</a></td>
                 <td>{{str_limit($post->body, 10)}}</td>
                 <td>{{$post->created_at->diffForHumans()}}</td>
                 <td>{{$post->updated_at->diffForHumans()}}</td>
               </tr>

             @endforeach
             </tbody>
           </table>

@stop