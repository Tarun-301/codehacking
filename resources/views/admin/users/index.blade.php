@extends('layouts.admin')

@section('content')

@if(Session::has('msg-delete-user'))
<p class="bg-danger">{{session('msg-delete-user')}}</p>
@elseif(Session::has('msg-update-user'))
<p class="bg-success">{{session('msg-update-user')}}</p>
@elseif(Session::has('msg-store-user'))
<p class="bg-success">{{session('msg-store-user')}}</p>
@endif
<h3>Users</h3>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
     @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td><img height="50" src="{{$user->photos ? $user->photos->file : 'http://placehold.it/400x400'}}" alt="" ></td>
        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <!-- Below $user->roles->name can also write for getting role name. But for executing the both code correctly (Eg) role parameter is compulsory to pass in controller by compact function.
        You can pass this parameter in index function or in create function.  -->
        <td>{{$user->roles['name']}}</td>
        <td>{{$user->is_active==1 ? 'YES' : 'NO'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>
     @endforeach
     @endif
    </tbody>
  </table>

@endsection