@extends('layouts.admin')
@section('title')
    Users
@stop
@section('content')
    <h1>Users</h1>

     <table class="table">
         <thead>
           <tr>
               <th>Id</th>
               <th>Photo</th>
               <th>Name</th>
               <th>Email</th>
               <th>Role</th>
               <th>Status</th>
               <th>Created</th>
               <th>Updated</th>
           </tr>
         </thead>
         <tbody>

         @if($users)
             @foreach($users as $user)
                 <tr>
                     <td>{{$user->id}}</td>
                     <td>
                         @if($user->photo_id == null)

                             <img height="30"  width="30" src="{{asset('images/image-placeholder.jpeg')}}" alt="User Image" class="img-circle">

                         @else

                             <img height="30"  width="30" src="{{$user->photo->name}}" alt="User Image" class="img-circle">

                         @endif
                     </td>
                     <td><a href="{{route('user.edit',$user->id)}}">{{$user->name}}</a></td>
                     <td>{{$user->email}}</td>
                     <td class="text-capitalize">{{$user->role->name}}</td>
                     <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                     <td>{{$user->created_at->diffForHumans()}}</td>
                     <td>{{$user->updated_at->diffForHumans()}}</td>
                 </tr>
             @endforeach
         @endif

         </tbody>
       </table>

@endsection
