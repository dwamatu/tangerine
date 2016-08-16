<?php

namespace App\Http\Controllers;

use App\Site;
use DB;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function getDashboard()
    {
        $sites = Site::all();

        return view('dashboard', ['sites' => $sites]);
    }

    public function getTest()
    {
        $sites = Site::all();
        return view('test', ['sites' => $sites]);

    }

//this function creates a new site

    public function siteCreateSite(Request $request)
    {
        $this->validate($request, [
            'landmark' => 'required|max:40',
            'longitude' => 'required',
            'latitude' => 'required',
            'size' => 'required|max:20',
            'status' => 'required|max:20',

        ]);
        $site = new Site();
        $site->landmark = $request['landmark'];
        $site->longitude = $request['longitude'];
        $site->latitude = $request['latitude'];
        $site->size = $request['size'];
        $site->status_id = $request['status'];

        $message = "There was an error";

        if ($request->user()->sites()->save($site)) {
            $message = 'Site succesfully created';
        }
        return redirect()->route('dashboard')->with(['message' => $message]);


    }

//      This function updates the details of a site

    public function siteEditSite(Request $request)
    {

        $this->validate($request, [
            'landmark' => 'required|max:40',
            'longitude' => 'required',
            'latitude' => 'required',
            'size' => 'required|max:20',
        ]);

        $site = Site::find($request['siteId']);
        $site->landmark = $request['landmark'];
        $site->latitude = $request['latitude'];
        $site->longitude = $request['longitude'];
        $site->size = $request['size'];


        $site->update();
        return redirect()->route('dashboard');

        /*return response()->json(['message'=> 'Site edited'],200);*/


    }

    public function index()
    {
        $sites = Site::all();
        echo $sites;

    }
//    This function gets all open sites
//   To be displayed on the map


    public function getOpen()
    {
        $sites = json_encode(DB::table('sites')->where('status_id', '1')->get());
        /* dd($sites);*/
        echo $sites;

    }

//  This function gets all closed sites.
//   To be displayed on the map
    public function getClosed()
    {
        $sites = json_encode(DB::table('sites')->where('status_id', '2')->get());
        /* dd($sites);*/
        echo $sites;
    }

//   This function gets all booked sites from the database.
//   To be displayed on the map
    public function getBooked()
    {
        $sites = json_encode(DB::table('sites')->where('status_id', '3')->get());
        /* dd($sites);*/
        echo $sites;

    }

    public function getLandmarks()
    {

        $siteLandmarks = DB::table('sites')->pluck('landmark');


        foreach ($siteLandmarks as $siteLandmark) {
            echo $siteLandmark;
        }
    }

    public function fetchSite($s)
    {
        $site = json_encode(DB::table('sites')->
        where('id', $s)->first());
        echo $site;
    }

}