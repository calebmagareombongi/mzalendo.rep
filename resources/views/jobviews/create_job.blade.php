@extends('auth.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Jobs Page</div>
  <div class="card-body">
      
  <form action="{{ route('caleb.job_store') }}" method="post">


  @csrf

        <label>Job Title</label></br>
        <input type="text" name="job_title" id="job_title" class="form-control"></br>
        <label>Job Description</label></br>
        <input type="text" name="job_desc" id="job_desc" class="form-control"></br>
        <label>Job Requirements</label></br>
        <input type="text" name="job_req" id="job_req" class="form-control"></br>
        <label>Salary</label></br>
        <input type="number" name="salary" id="salary" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop