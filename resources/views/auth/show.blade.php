@extends('auth.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Projects Page</div>
  <div class="card-body">
   
  @if ($project)
        <div class="card-body">
            <h5 class="card-title">Project Name: {{ $project->project_name }}</h5>
            <p class="card-text">Project Description: {{ $project->project_desc }}</p>
            <p class="card-text">Project Budget: {{ $project->project_budget }}</p>
            <p class="card-text">Project Status: {{ $project->project_status }}</p>
            <p class="card-text">Project Start Date: {{ $project->project_start_date }}</p>
            <p class="card-text">Project End Date: {{ $project->project_end_date }}</p>
        </div>
    @else
        <p>Project not found.</p>
    @endif
  </div>
       
    </hr>
  
  </div>
</div>