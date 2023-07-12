@extends('auth.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Announcements Page</div>
  <div class="card-body">
      
  <form action="{{ route('ashir.announcement_store') }}" method="post">


  @csrf

        <label>Announcement Title</label></br>
        <input type="text" name="announcement_title" id="announcement_title" class="form-control"></br>
        <label>Announcement </label></br>
        <input type="text" name="announcement" id="announcement" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop