@extends('layouts.app')

@section('content')

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/posts/create">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Create New Apartment</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="requestroom" >
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Rooms Waiting For Approval</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wantingroom">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>My requested Rooms</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="occupiedroom">
          <i class="fas fa-fw fa-table"></i>
          <span>Rooms Currently Using</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="useroom">
          <i class="fas fa-fw fa-table"></i>
          <span>Rooms I am Using</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="own">
          <i class="fas fa-fw fa-table"></i>
          <span>Owner_rating</span></a>
      </li>
    </ul>


<div class="container">
    <div class="row justify-content-center">
        @if(count($posts)<1)
           <h1>No Pending Request</h1>
        @else
        <div class row>
          <h1>Requested Rooms</h1>
        </div>
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Room Name</th>
      <th scope="col">flat Name</th>
      <th scope="col">From date</th>
      <th scope="col">To Date</th>
       <th scope="col">Requested By</th>
      <th scope="col">Confirm</th>
      <th scope="col">Cancel</th>
      <th scope="col">User Profile</th>
    </tr>
  </thead>
          @foreach($posts as $post)
  <tbody>
    <tr>
      <td>{{$post->rpname}}</td>
      <td>{{$post->flat_name}}</td>
      <td>{{$post->requested_from_date}}</td>
      <td>{{$post->requested_to_date}}</td>
      <td>{{$post->host_name}}</td>
      <td>{{ Form::open(['action'=>['DashboardController@confirmroom',$post->id],'method' => 'POST']) }}
                {{Form::submit('Confirm',['class'=>'btn btn-primary'])}}
                {{ Form::close() }}</td>
                <td>
                {{ Form::open(['action'=>['DashboardController@cancelroom',$post->id],'method' => 'POST']) }}
                {{Form::submit('Cancel',['class'=>'btn btn-primary'])}}
                {{ Form::close() }}</td>
                <td>
                   <a href="/blog2/public/dashboard/want/{{$post->hostid}}" class="btn btn-info">Show Profile</a>
                </td>


    </tr>
        @endforeach
        </tbody>
</table>
        @endif
        @endsection
