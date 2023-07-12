@extends('auth.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Jobs Page</div>
  <div class="card-body">
   
  @if ($job)
        <div class="card-body">
            <h5 class="card-title">Job Title: {{ $job->job_title }}</h5>
            <p class="card-text">Job Description: {{ $job->job_desc }}</p>
            <p class="card-text">Job Requirements: {{ $job->job_req }}</p>
            <p class="card-text">Salary : {{ $job->salary }}</p>
            </div>
    @else
        <p>Job not found.</p>
    @endif
  </div>
       
    </hr>
  
  </div>
</div>