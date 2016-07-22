@extends('layouts.master')

@section('title')
    Book Sites
@endsection
@section('content')

    <section class="row ">
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body">
                <div class="row">


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