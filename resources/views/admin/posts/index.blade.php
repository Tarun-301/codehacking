@extends('layouts.admin')

@section('content')

<h3>Posts</h3>

<table class="table">
       <thead>
         <tr>
             <th>Id</th>
             <th>Photo</th>
             <th>Owner</th>
             <th>Category</th>
             <th>Title</th>
             <th>body</th>
             <th>Post link</th>
             <th>Comments</th>
             <th>Created at</th>
             <th>Update</th>
        </thead>
        <tbody>

        @if($posts)


            @foreach($posts as $post)

          <tr>
              <td>{{$post->id}}</td>
              <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400' }} " alt=""></td>
              <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
              <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->body}}</td>
              <td><a href="#">View Post</a></td>
              <td><a href="#">View Comments</a></td>
              <td>{{$post->created_at->diffForhumans()}}</td>
              <td>{{$post->updated_at->diffForhumans()}}</td>

          </tr>

            @endforeach

            @endif

       </tbody>
     </table>



    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">

         

        </div>
    </div>

@endsection