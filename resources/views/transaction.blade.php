@extends('layouts.master')

@section('title')
    Transactions
@endsection
@section('content')
    <section class="row">
        <div class="container-fluid">
            <div class="main-content">


                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h5>Transaction Information</h5></div>
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs-1">All Transactions</a></li>
                                <li><a href="#tabs-2">Closed</a></li>
                                <li><a href="#tabs-3">Booked</a></li>
                                <li><a href="#tabs-4">Open</a></li>
                            </ul>
                            <div id="tabs-1">
                                <table id="myTable" class="table table-hover table-bordered table-stripped dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Site Name</th>
                                        <th>Client Name</th>
                                        <th>Event</th>
                                        <th>Transaction Date</th>
                                        <th>Duration</th>
                                        <th>Comment</th>
                                        <th>By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactions as $transaction)

                                        <tr role="row" class="even">
                                            <td>{{$transaction->id}}</td>
                                            <td>{{$transaction->site->landmark}}</td>
                                            <td>{{$transaction->client->client_name}}</td>
                                            <td>{{$transaction->event}}</td>
                                            <td>{{$transaction->transaction_date}}</td>
                                            <td>{{$transaction->duration}} days</td>
                                            <td>{{$transaction->comments}}</td>
                                            <td>{{$transaction->user->username}}</td>
                                            {{--<td><a class="update" href="">update</a></td>--}}
                                        </tr>


                                    @endforeach
                                    </tbody>
                                </table>


                            </div>
                            <div id="tabs-2">

                                <table id="myTable2" class="table table-hover table-bordered table-stripped dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Site Name</th>
                                        <th>Client Name</th>
                                        <th>Event</th>
                                        <th>Transaction Date</th>
                                        <th>Duration</th>
                                        <th>Comment</th>
                                        <th>By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactions as $transaction)

                                        <tr role="row" class="even">
                                            <td>{{$transaction->id}}</td>
                                            <td>{{$transaction->site->landmark}}</td>
                                            <td>{{$transaction->client->client_name}}</td>
                                            <td>{{$transaction->event}}</td>
                                            <td>{{$transaction->transaction_date}}</td>
                                            <td>{{$transaction->duration}} days</td>
                                            <td>{{$transaction->comments}}</td>
                                            <td>{{$transaction->user->username}}</td>
                                            {{--<td><a class="update" href="">update</a></td>--}}
                                        </tr>


                                    @endforeach
                                    </tbody>
                                </table>


                            </div>
                            <div id="tabs-3">
                                <table id="myTable3" class="table table-hover table-bordered table-stripped dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Site Name</th>
                                        <th>Client Name</th>
                                        <th>Event</th>
                                        <th>Transaction Date</th>
                                        <th>Duration</th>
                                        <th>Comment</th>
                                        <th>By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactions as $transaction)

                                        <tr role="row" class="even">
                                            <td>{{$transaction->id}}</td>
                                            <td>{{$transaction->site->landmark}}</td>
                                            <td>{{$transaction->client->client_name}}</td>
                                            <td>{{$transaction->event}}</td>
                                            <td>{{$transaction->transaction_date}}</td>
                                            <td>{{$transaction->duration}} days</td>
                                            <td>{{$transaction->comments}}</td>
                                            <td>{{$transaction->user->username}}</td>
                                            {{--<td><a class="update" href="">update</a></td>--}}
                                        </tr>


                                    @endforeach
                                    </tbody>
                                </table>


                            </div>
                            <div id="tabs-4">

                                <table id="myTable4" class="table table-hover table-bordered table-stripped dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Site Name</th>
                                        <th>Client Name</th>
                                        <th>Event</th>
                                        <th>Transaction Date</th>
                                        <th>Duration</th>
                                        <th>Comment</th>
                                        <th>By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactions as $transaction)

                                        <tr role="row" class="even">
                                            <td>{{$transaction->id}}</td>
                                            <td>{{$transaction->site->landmark}}</td>
                                            <td>{{$transaction->client->client_name}}</td>
                                            <td>{{$transaction->event}}</td>
                                            <td>{{$transaction->transaction_date}}</td>
                                            <td>{{$transaction->duration}} days</td>
                                            <td>{{$transaction->comments}}</td>
                                            <td>{{$transaction->user->username}}</td>
                                            {{--<td><a class="update" href="">update</a></td>--}}
                                        </tr>


                                    @endforeach
                                    </tbody>
                                </table>


                            </div>

                        </div>

                    </div>


                </div>
            </div>


        </div>


        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

        <script src="{{URL::to('src/js/styletabs.js')}}"></script>

        </div>


    </section>

@endsection