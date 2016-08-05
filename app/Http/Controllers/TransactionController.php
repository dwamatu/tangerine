<?php

namespace App\Http\Controllers;

use App\Client;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function getTransactions()
    {
        $transactions = Transaction::all();
        return view('transaction', ['transactions' => $transactions]);
    }

    public function transactionCreateTransaction(Request $request)
    {
        $user = Auth::user();
        $client = Client::where('client_name', $request['tmpclient_name'])->first();
        /* dd($client);*/

        $transaction = new Transaction();
        $transaction->site_id = $request['the-site-id'];
        $transaction->client_id = $client->id;
        $transaction->event = $request['event'];
        $transaction->transaction_date = $request['start_date'];
        $transaction->duration = $request['duration'];
        $transaction->comments = $request['comment'];
        $transaction->user_id = $user->id;

        $transaction->save();

        return redirect()->route('dashboard');


    }
}