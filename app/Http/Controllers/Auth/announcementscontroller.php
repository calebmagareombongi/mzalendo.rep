<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class announcementscontroller extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('announceviews.announcement_index', ['announcements' => $announcements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announceviews.create_announcement');
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
            'announcement_title' => 'required|string|max:255',
            'announcement' => 'required|string|max:255',
            
        ]);

        $announcement = Announcement::create([
            'announcement_title' => $request->announcement_title,
            'announcement' => $request->announcement,
           
        ]);

        event(new Registered($announcement));

        // You can remove the following line since it seems unnecessary
        // Auth::create($job);

        return redirect()->route('ashir.announcement_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement::find($id);

        if ($announcement) {
            return view('announceviews.show_announcement')->with('announcement', $announcement);
        } else {
            return redirect()->back()->with('error', 'Announcement not found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($announcement)
{
    $announcement = Announcement::find($announcement);
    return view('announceviews.edit_announcement')->with('announcements', $announcement);
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $announcement)
    {
        $announcement = Announcement::find($announcement);
        $input = $request->all();

        $announcement->update($input);

        // Additional logic

        return redirect()->route('ashir.announcement_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Announcement::destroy($id);

        // Additional logic

        return redirect()->route('ashir.announcement_index');
    }
}
