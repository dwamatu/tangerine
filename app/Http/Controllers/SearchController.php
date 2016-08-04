<?php

namespace App\Http\Controllers;

use DB;

class SearchController extends Controller
{
    public function clientSearch($term)
    {
        $clients = DB::table('clients')
            ->where('client_name', 'like', '%' . $term . '%')
            ->get();
        $clientobj = json_encode($clients);
        echo $clientobj;
    }
}