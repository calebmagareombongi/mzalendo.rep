@extends('auth.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
  <form action="{{ route('auth.update', ['project' => $projects->id]) }}" method="post">


        {!! csrf_field() !!}
       
        <input type="hidden" name="_method" value="PUT">

        <input type="hidden" name="id" id="id" value="{{$projects->id}}" id="id" />
        <label>Project Name</label></br>
        <input type="text" name="project_name" id="project_name" value="{{$projects->project_name}}" class="form-control"></br>
        <label>Project Description</label></br>
        <input type="text" name="project_desc" id="project_desc"value="{{$projects->project_desc}}" class="form-control"></br>
        <label>Project Budget</label></br>
        <input type="number" name="project_budget" id="project_budget" value="{{$projects->project_budget}}" class="form-control"></br>
        <label>Project Status</label></br>
        <input type="number" name="project_status" id="project_status" value="{{$projects->project_status}}" class="form-control"></br>
        <label>Project Start Date</label></br>
        <input type="date" name="project_start_date" id="project_start_date"value="{{$projects->project_start_date}}" class="form-control"></br>
        <label>Project End Date</label></br>
        <input type="date" name="project_end_date" id="project_end_date"value="{{$projects->project_end_date}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop