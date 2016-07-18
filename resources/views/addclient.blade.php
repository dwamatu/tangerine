@extends('layouts.master')

@section('title')
    Add Client
@endsection
@section('content')

    <section class="row ">
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body">
                <div class="row">
                    <div class="col-md-2 col-md-offset-3">

                        <img src="https://placehold.it/180x180" alt="..." class="img-thumbnail">
                    </div>

                    <div class="col-md-3 ">
                        <form action="">

                            <div class="input-group">
                                <span class="input-group-addon custom_label" id="sizing-addon2">Client Name</span>
                                <input type="text" class="form-control custom_label" name="client_name" id="client_name"
                                       aria-describedby="sizing-addon2">
                            </div>
                            <div class="form-group"></div>
                            <div class="input-group">
                                <span class="input-group-addon custom_label" id="sizing-addon2">Client Contact</span>
                                <input type="text" class="form-control custom_label" name="client_contact"
                                       id="client_contact" aria-describedby="sizing-addon2">
                            </div>
                            <div class="form-group"></div>
                            <div class="input-group">
                                <span class="input-group-addon custom_label" id="sizing-addon2">Client Email</span>
                                <input type="email" class="form-control custom_label" name="client_email"
                                       id="client_email" aria-describedby="sizing-addon2">
                            </div>

                            <div class="form-group"></div>
                            <div class="input-group">
                                <label for="image">Image(only.jpg)</label>
                                <input type="file" name="image" class="form-control custom_label" id="image">
                            </div>
                            <div class="form-group"></div>

                            <div class="btn-group">
                                <button class="btn btn-secondary custom_label" type="button">Submit</button>
                            </div>

                        </form>

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