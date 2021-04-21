@extends('layouts.admin')

@section('content')
<h3>Edit User</h3>
<div class="row">


<div class="col-sm-3">

<img src="{{$user->photos ? $user->photos->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

</div>
<div class="col-sm-9">


{!! Form::model($user,['method'=>'PATCH', 'action'=> ['App\Http\Controllers\AdminUsersController@update', $user->id],'files'=>true]) !!}


<div class="form-group">
       {!! Form::label('name', 'Name:') !!}
       {!! Form::text('name', null, ['class'=>'form-control'])!!}
 </div>


 <div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::email('email', null, ['class'=>'form-control'])!!}
 </div>

  <div class="form-group">
      {!! Form::label('role_id', 'Role:') !!}
      <!-- The below statememt create dynamic dropdown menu. $roles showing the valuse come from database.Here is no need to concatenating with value passing in [] during create data.
       and after it null means default value. For getting date from database in AdminUsersController.php code written in create function.  -->
      {!! Form::select('role_id', $roles , null, ['class'=>'form-control'])!!}
  </div>


  <div class="form-group">
      {!! Form::label('is_active', 'Status:') !!}
      <!-- The below statememt create static dropdown menu. array which cantain tha values and and here default value will pass null to show actual data instead of 0 (which was passed during create data) -->
      {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), null , ['class'=>'form-control'])!!}
   </div>


  <div class="form-group">
      {!! Form::label('photo_id', 'Photo:') !!}
      {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
   </div>



  <div class="form-group">
      {!! Form::label('password', 'Password:') !!}
      {!! Form::password('password', ['class'=>'form-control'])!!}
   </div>


   <div class="form-group">
      {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
   </div>

 {!! Form::close() !!}
 </div>
 </div>

 <div class="row">
 @include('includes.form_error')
 </div>

 
@endsection