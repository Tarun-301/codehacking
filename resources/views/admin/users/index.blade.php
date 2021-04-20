@extends('layouts.admin')

@section('content')

<h3>Users</h3>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
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
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        @foreach($roles as $role)
        @if($user->role_id==$role->id)
        <td>{{$role->name}}</td>
        @endif
        @endforeach
        <td>{{$user->is_active==1 ? 'YES' : 'NO'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>
     @endforeach
     @endif
    </tbody>
  </table>

@endsection