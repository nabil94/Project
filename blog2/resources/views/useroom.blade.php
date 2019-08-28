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
    </ul>


<div class="container">
    <div class="row justify-content-center">
        @if(count($posts)<1)
           <h1>No Room in Use</h1>
        @else
         <div class row>
          <h1>My using Rooms</h1>
        </div>
         <div class="col-md-5" align="right">
     <a href="{{ url('/dashboard/occupiedroom/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
      <table  class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Room Name</th>
      <th scope="col">From date</th>
      <th scope="col">To Date</th>
      <th scope="col">Owner</th>
      <th scope="col">Today</th>
    </tr>
  </thead>
  <tbody>

          @foreach($posts as $post)
    <tr>
      <td>{{$post->rpname}}</td>
      <td>From: {{$post->from_date}}</td>
      <td>Till: {{$post->to_date}}</td>
      <td>{{$post->user_name}}</td>
      <td>{{$todayDate}}</td>
    </tr>
        @endforeach

        </tbody>
</table>
@endif

<div class="item-wrapper">
  <button class="btn btn-primary" onclick="openForm()">Review</button>
      <div class="form-popup" id="myForm">
        {{ Form::open(['action'=>['PostsController@review_room',$post->id],'method' => 'POST','class'=>'form-container']) }}
          <div class="form-group">
            <input type="text" class="form-control" name="headline" id="" placeholder="Headline">
            <input type="text" class="form-control" name="description" id="" placeholder="Description">
            <div class="rate">
              <input type="radio" id="star5" name="rate" value="5" class="mt_star" />
              <label for="star5" title="text">5 stars</label>
              <input type="radio" id="star4" name="rate" value="4" class="mt_star"/>
              <label for="star4" title="text">4 stars</label>
              <input type="radio" id="star3" name="rate" value="3" class="mt_star"/>
              <label for="star3" title="text">3 stars</label>
              <input type="radio" id="star2" name="rate" value="2" class="mt_star"/>
              <label for="star2" title="text">2 stars</label>
              <input type="radio" id="star1" name="rate" value="1" class="mt_star"/>
              <label for="star1" title="text">1 star</label>
            </div>
            {{Form::submit('Submit Review',['class'=>'btn btn-primary'])}}
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </div>
        </form>
      </div>

    </div>
    </div>
</div>
@endsection
