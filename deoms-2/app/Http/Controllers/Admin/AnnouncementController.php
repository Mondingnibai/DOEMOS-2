<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application announcement.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.announcement');
    }

    /**
     * Show the application new announcement.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newAnnouncement()
    {
        return view('admin.announcement.newAnnouncement');
    }

    /**
     * Store newly created announcement 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        try {
            
            // validate announcement form data
            $validate = $request->validate([
                'title' => 'required',
                'venue' => 'required',
                'date' => 'required',
                'time' => 'required',
                'description' => 'required'
            ]);

            // No errors, save the announcement
            if($validate) {
                $announcement = Announcement::create($request->post());
                return response()->json([
                    'message' => 'New Announcement successfully created',
                    'annoucement' => $announcement
                ]);
            }

        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function showAllAnnouncement() 
    {
        try {
            $announcement = Announcement::all();
            return response()->json($announcement);

        } catch(\Exception $e) {
            return $e->getMessage();
        }  
    }

    /**
     * Delete Announcement
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
      try {

        // Find by id, if exists delete
        $res = Announcement::find($id);
        if($res) {
            $announcement = $res->delete();
        }

        return response()->json([
            'announcement' => $announcement,
            'message' => 'Delete Successfully',
        ]);

      } catch(\Exception $e) {
        return $e->getMessage();
      }
    }


     /**
     * Show announcement by id
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showAnnouncementById($id) {
        try {
            
            // Find announcement by id
            $announcement = Announcement::find($id);

            if($announcement) {
                return response()->json([
                    'announcement' => $announcement,
                    'message' => 'Announcement',
                ]);
            }

        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
