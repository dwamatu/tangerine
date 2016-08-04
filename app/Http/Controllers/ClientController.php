<?php

namespace App\Http\Controllers;

use App\Client;
use DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getClientDashboard()
    {
        $clients = Client::all();
        return view('clients', ['clients' => $clients]);
    }

    public function clientCreateClient(Request $request)
    {
        $this->validate($request, [
            'client_name' => 'required|unique:clients|max:40',
            'client_contact' => 'required',
            'client_email' => 'required|email'
        ]);

        $client_name = $request['client_name'];
        $client_contact = $request['client_contact'];
        $client_email = $request['client_email'];

        $client = new Client();
        $client->client_name = $client_name;
        $client->client_contact = $client_contact;
        $client->client_email = $client_email;

        $client->save();

        return redirect()->route('client.dashboard');

    }

    public function getClients()
    {
        $clients = Client::all()->pluck('client_name');

        /*foreach ($clients as $client) {
            echo $client ;
        }*/
        echo $clients;

    }

}