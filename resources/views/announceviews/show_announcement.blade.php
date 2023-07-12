@extends('auth.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Announcement Page</div>
  <div class="card-body">
   
  @if ($announcement)
        <div class="card-body">
            <h5 class="card-title">Announcement Title: {{ $announcement->announcement_title }}</h5>
            <p class="card-text">Announcements: {{ $announcement->announcement }}</p>
           
            </div>
    @else
        <p>Announcement not found.</p>
    @endif
  </div>
       
    </hr>
  
  </div>
</div>