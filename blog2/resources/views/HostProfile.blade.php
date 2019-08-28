@extends('layouts.app')
@section('content')
<div class="card" style="width:350px">
	<div class="card-body">
    <p class="card-text">Host Profile :</p>
    <p class="card-text">ID   : {{$user->id}}</p>
    <p class="card-text">Name : {{$user->name}}</p>
    <p class="card-text">Email:{{$user->email}}</p>
    <p class="card-text">no   :{{$user->phone_number}}</p>
    <p class="card-text">age  :{{$user->age}}</p>
    <p class="card-text">nid  :{{$user->nid}}</p> 




			<div class="col-md-4">
				<a href="{{action('PostsController@index')}}" class="btn btn-primary">Back</a>
			</div>


		</div>
</div>
@endsection
