<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobviews.job_index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobviews.create_job');
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
            'job_title' => 'required|string|max:255',
            'job_desc' => 'required|string|max:255',
            'job_req' => 'required|string|max:255',
            'salary' => 'required|int|min:2',
        ]);

        $job = Job::create([
            'job_title' => $request->job_title,
            'job_desc' => $request->job_desc,
            'job_req' => $request->job_req,
            'salary' => $request->salary,
        ]);

        event(new Registered($job));

        // You can remove the following line since it seems unnecessary
        // Auth::create($job);

        return redirect()->route('caleb.job_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);

        if ($job) {
            return view('jobviews.show_job')->with('job', $job);
        } else {
            return redirect()->back()->with('error', 'Job not found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($job)
{
    $job = Job::find($job);
    return view('jobviews.edit_job')->with('jobs', $job);
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $job)
    {
        $job = Job::find($job);
        $input = $request->all();

        $job->update($input);

        // Additional logic

        return redirect()->route('caleb.job_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::destroy($id);

        // Additional logic

        return redirect()->route('caleb.job_index');
    }
}
