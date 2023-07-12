@extends('auth.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Projects Page</div>
  <div class="card-body">
      
  <form action="{{ route('auth.store') }}" method="post">


        {!! csrf_field() !!}
        <label>Project Name</label></br>
        <input type="text" name="project_name" id="project_name" class="form-control"></br>
        <label>Project Description</label></br>
        <input type="text" name="project_desc" id="project_desc" class="form-control"></br>
        <label>Project Budget</label></br>
        <input type="number" name="project_budget" id="project_budget" class="form-control"></br>
        <label>Project Status</label></br>
        <input type="number" name="project_status" id="project_status" class="form-control"></br>
        <label>Project Start Date</label></br>
        <input type="date" name="project_start_date" id="project_start_date" class="form-control"></br>
        <label>Project End Date</label></br>
        <input type="date" name="project_end_date" id="project_end_date" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop