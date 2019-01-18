@extends('layouts.admin')
@section('title')
    Users
@stop

@section('content')


    <h1>Users</h1>

    @if(session()->has('deleted_user'))
        <div class="m-t-5 alert alert-danger">
            <p>{{session('deleted_user')}}</p>
        </div>
    @endif

    @if(session()->has('user_update'))
        <div class="m-t-5 alert alert-success">
            <p>{{session('user_update')}}</p>
        </div>
    @endif

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
               <th>Action</th>
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
                     <td>
                         <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal-{{$user->id}}" data-id="{{$user->id}}"> &times; </button>
                     </td>

                     <!-- Modal -->
                     <div class="modal fade" id="delete-modal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteUser" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="deleteUserLabel"><b>Confirm Deleting User</b></h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <p> Do you really want to <strong> delete </strong> user <strong>{{$user->name}}</strong>?</p>
                                 </div>
                                 <div class="modal-footer">


                                     {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy', $user->id]]) !!}

                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                         <button type="submit" class="btn btn-danger">Yes</button>

                                     {!! Form::close() !!}

                                 </div>
                             </div>
                         </div>
                     </div>

                 </tr>
             @endforeach
         @endif

         </tbody>
       </table>

@endsection

