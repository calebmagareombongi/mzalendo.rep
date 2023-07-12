@extends('auth.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
  <form action="{{ route('ashir.announcement_update', ['announcement' => $announcements->id]) }}" method="post">


        {!! csrf_field() !!}
       
        <input type="hidden" name="_method" value="PUT">

        
        <label>Announcement Title</label></br>
        <input type="text" name="announcement_title" id="announcement_title" value="{{$announcements->announcement_title}}" class="form-control"></br>
        <label>Announcement</label></br>
        <input type="text" name="announcement" id="announcement"value="{{$announcements->announcement}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop