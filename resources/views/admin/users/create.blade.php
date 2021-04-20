@extends('layouts.admin')

@section('content')
<h3>Create</h3>
{!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\AdminUsersController@store','files'=>true]) !!}


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
      <!-- The below statememt create dynamic dropdown menu. [] which cantain tha values + $roles concatenating the valuse come from database.
       and after it null means default value. For getting date from database in AdminUsersController.php code written in create function.  -->
      {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control'])!!}
  </div>


  <div class="form-group">
      {!! Form::label('is_active', 'Status:') !!}
      <!-- The below statememt create static dropdown menu. array which cantain tha values and after it 0 means default value -->
      {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), 0 , ['class'=>'form-control'])!!}
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
      {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
   </div>

 {!! Form::close() !!}

 @include('includes.form_error')
 
@endsection