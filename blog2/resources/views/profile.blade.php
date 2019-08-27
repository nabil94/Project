@extends('layouts.app')
@section('content')
<div class="card" style="width:350px">
	<div class="card-body">
    <p class="card-text">Host Profile :</p>
    <p class="card-text">ID   : {{auth()->user()->id}}</p>
    <p class="card-text">Name : {{auth()->user()->name}}</p>
    <p class="card-text">Email:{{auth()->user()->email}}</p>
    <p class="card-text">no   :{{auth()->user()->phone_number}}</p>
    <p class="card-text">age  :{{auth()->user()->age}}</p>
    <p class="card-text">nid  :{{auth()->user()->nid}}</p>




			<div class="col-md-4">
				<a href="{{action('PostsController@index')}}" class="btn btn-primary">Back</a>
			</div>
      <div class="col-md-12">
				<a href="profile/{{auth()->user()->id}}/edit" class="btn btn-primary">Edit</a>
			</div>

		</div>
</div>
@endsection
