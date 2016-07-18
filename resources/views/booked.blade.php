@extends('layouts.master')

@section('title')
    Booked Sites
@endsection
@section('content')

    <section class="row ">
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body">
                <div class="row">

                    <div class="col-md-3">
                        <div class="btn-group">

                            <button type="button" class="btn btn-default">CSV</button>
                            <button type="button" class="btn btn-default">XCL</button>
                            <button type="button" class="btn btn-default">TXT</button>

                        </div>

                    </div>
                    <div class=" col-md-3 col-md-offset-3">

                        <div class="input-group">
                            <span class="input-group-addon custom_label" id="sizing-addon2">Start Date</span>
                            <input type="text" class="form-control custom_label" name="start_date" id="start_date"
                                   aria-describedby="sizing-addon2">

                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="input-group">

                            <span class="input-group-addon custom_label" id="sizing-addon2">End Date</span>
                            <input type="text" class="form-control custom_label" name="end_date" id="end_date"
                                   aria-describedby="sizing-addon2">


                        </div>


                    </div>
                </div>
                <section class="row">
                    <table class="table table-inverse table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Client Name</th>
                            <th>Client Contact</th>
                            <th>Client Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>


                </section>


            </div>
        </div>

    </section>
@endsection