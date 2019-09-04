@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        @if(count($posts)<1)
           <h1>No booked rooms</h1>
        @else
        <div class row>
          <h1>Rooms</h1>
        </div>
      <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th>Room name</th>
      <th>owner</th>
      <th>flat_name</th>
      <th>Booked by</th>
      <th>Action</th>
    </tr>
  </thead>
          @foreach($posts as $post)
  <tbody>
    <tr>
      <td>{{$post->rpname}}</td>
      <td>{{$post->user_name}}</td>
      <td>{{$post->flat_name}}</td>
      <td>{{$post->host_name}}</td>
      <td>{{ Form::open(['action'=>['DashboardController@editBook',$post->id],'method' => 'POST']) }}
                {{Form::submit('book',['class'=>'btn btn-primary'])}}
                {{ Form::close() }}
        <td/>
    </tr>

        @endforeach
    </tbody>
</table>
        @endif

        @endsection
