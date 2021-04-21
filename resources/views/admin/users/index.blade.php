@extends('layouts.admin')

@section('content')

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