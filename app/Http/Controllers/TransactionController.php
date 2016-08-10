<?php

namespace App\Http\Controllers;

use App\Client;
use App\Transaction;
use Carbon\Carbon;
use DB;
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
        $client = Client::where('client_name', $request['clientname'])->first();
        /* dd($client);*/
//      Variables for updating the table
        $trans_siteId = $request['site_id'];
        $trans_status = $request['event'];
//      Carbon
        $dtcarbon = Carbon::createFromFormat('Y-m-d', $request['transaction_date']);
        $duration = $request['duration'];


//      Inserting new transaction
        $transaction = new Transaction();
        $transaction->site_id = $request['site_id'];
        $transaction->client_id = $client->id;
        $transaction->event = $request['event'];
        $transaction->transaction_date = $request['transaction_date'];
        $transaction->expiry_date = $dtcarbon->addDays($duration);
        $transaction->duration = $duration;
        $transaction->comments = $request['comment'];
        $transaction->user_id = $user->id;

        $transaction->save();

        //updates the status of a site if it changes

        DB::table('sites')
            ->where('id', $trans_siteId)
            ->update(['status' => $trans_status]);

        return redirect()->route('dashboard');


    }
}