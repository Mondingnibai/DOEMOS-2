<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;

class HomeAnnouncementController extends Controller
{
    /**
     * Display All Announcement in Public.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function getAllAnnouncement() 
    {
        try {
            $announcement = Announcement::all();
            return response()->json($announcement);

        } catch(\Exception $e) {
            return $e->getMessage();
        }  
    }

}
