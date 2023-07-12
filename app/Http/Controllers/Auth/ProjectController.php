<?php
 namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */

 public function index()
 {
     $projects = Project::all();

     // Debugging code
     //dd($projects);

     return view('auth.index', ['projects' => $projects]);
 }





/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('auth.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $request->validate([
        'project_name' => 'required|string|max:255',
        'project_desc' => 'required|string|max:255',
        'project_budget' => 'required|int|max:255',
        'project_status' => 'required|int|min:8',
        'project_start_date' => 'required|string|max:255',
        'project_end_date' => 'required|string|max:255',
    ]);

    $project = Project::create([
        'project_name' => $request->project_name,
        'project_desc' => $request->project_desc,
        'project_budget' => $request->project_budget,
        'project_status' =>  $request->project_status,
        'project_start_date' => $request->project_start_date,
        'project_end_date' => $request->project_end_date,
    ]);

    event(new Registered($project));

    Auth::create($project);

    return redirect(RouteServiceProvider::HOME);
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $project = Project::find($id);
    
    if ($project) {
        return view('auth.show')->with('project', $project);
    } else {
        return redirect()->back()->with('error', 'Project not found.');
    }
}



/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($project)
{
    $project = Project::find($project);
    return view('auth.edit')->with('projects', $project);
}


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $project)
{
    $project = Project::find($project);
    $input = $request->all();
    $project->update($input);
    return redirect('auth')->with('flash_message', 'Project Updated!');
}

    


/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    Project::destroy($id);
    return redirect('auth')->with('flash_message', 'Project deleted!');
}

}










