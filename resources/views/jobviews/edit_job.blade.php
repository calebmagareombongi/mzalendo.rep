@extends('auth.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
  <form action="{{ route('caleb.job_update', ['job' => $jobs->id]) }}" method="post">


        {!! csrf_field() !!}
       
        <input type="hidden" name="_method" value="PUT">

        
        <label>Job Title</label></br>
        <input type="text" name="job_title" id="job_title" value="{{$jobs->job_title}}" class="form-control"></br>
        <label>Job Description</label></br>
        <input type="text" name="job_desc" id="job_desc"value="{{$jobs->job_desc}}" class="form-control"></br>
        <label>Salary</label></br>
        <input type="number" name="salary" id="salary" value="{{$jobs->salary}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop