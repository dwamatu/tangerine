<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;


class SiteController extends Controller
{
    public function getDashboard()
    {
        $sites = Site::all();
        return view('dashboard',['sites'=>$sites]);
    }
    public function siteCreateSite(Request $request)
    {
        $this->validate($request,[
            'landmark'=>'required|max:40',
            'longitude'=> 'required',
            'latitude'=> 'required',
            'size'=>'required|max:20'
        ]);
        $site = new Site();
        $site->landmark = $request['landmark'];
        $site->longitude = $request['longitude'];
        $site->latitude = $request['latitude'];
        $site->size = $request['size'];
        $message = "There was an error";
        if($request->user()->sites()->save($site))
        {
            $message = 'Site succesfully created';
        }
        return redirect()->route('dashboard')->with(['message'=> $message]);


    }
    public function siteEditSite(Request $request){
        $this->validate($request,[
            'landmark'=>'required|max:40',
            'longitude'=> 'required',
            'latitude'=> 'required',
            'size'=>'required|max:20'

        ]);
        $site = Site::find($request['siteId']);
        $site ->landmark =$request['landmark'];
        $site ->latitude =$request['latitude'];
        $site ->longitude =$request['longitude'];
        $site ->size =$request['size'];

        $site->update();
        return redirect()->route('dashboard');

        /*return response()->json(['message'=> 'Site edited'],200);*/
        

    }


}