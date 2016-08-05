@extends('layouts.master')

@section('title')
    Dashboard
@endsection
@section('content')
    @include('includes.message-block')



    <section class="row ">
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="main-content">

                <div class="row">
                    <div class="col-md-9">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                {{--Google Maps API--}}

                                <div id="map" style="height:500px;">

                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="options-box">

                                    <input type="button" id="show-listings" value="Show Listings">
                                    <input type="button" id="hide-listings" value="Hide Listings">
                                    <input type="button" id="toggle-drawing" value="Drawing Tools">
                                    <input type="text" id="zoom-to-area-text"
                                           placeholder="Enter your favorite area!">
                                    <input type="button" id="zoom-to-area" value="Zoom">
                                    <input type="button" id="closed-listings" value="Show Closed">
                                    <input type="button" id="open-listings" value="Show Open">
                                    <input type="button" id="booked-listings" value="Show Booked">

                                </div>
                            </div>


                        </div>


                    </div>
                    {{--Add site Form--}}
                    <div class=" col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h5>Add Site</h5>
                            </div>
                            <div class="panel-body">
                                <form action=" " method="post" class="form-addsite" id="form-addsite">
                                    <div class="input-group">
                                                <span class="input-group-addon input-sm"
                                                      id="basic-addon1">Landmark</span>
                                        <input type="text" class="form-control input-sm" name="landmark"
                                               id="landmark" required>
                                    </div>
                                    <div class="form-group"></div>

                                    <div class="input-group">
                                                <span class="input-group-addon input-sm"
                                                      id="basic-addon1">Latitude</span>
                                        <input type="text" class="form-control input-sm" name="latitude"
                                               id="latitude" required>
                                    </div>
                                    <div class="form-group"></div>
                                    <div class="input-group">
                                                <span class="input-group-addon custom_label"
                                                      id="basic-addon1">Longitude</span>
                                        <input type="text" class="form-control input-sm" name="longitude"
                                               id="longitude" required>
                                    </div>
                                    <div class="form-group"></div>
                                    <div class="input-group">
                                        <span class="input-group-addon input-sm" id="basic-addon1">Size</span>
                                        <select class="form-control input-sm" id="size" name="size" required>
                                            <option value=""></option>
                                            <option value="StreetLight">Streetlight</option>
                                            <option value="Billboard">Billboard</option>
                                            <option value="Medium">Medium</option>

                                        </select>
                                    </div>
                                    <div class="form-group"></div>
                                    <div class="input-group">
                                        <span class="input-group-addon input-sm" id="basic-addon1">Status</span>
                                        <select class="form-control input-sm" id="status" name="status" required>
                                            <option value=""></option>
                                            <option value="Open">Open</option>
                                            <option value="Close">Close</option>

                                        </select>
                                    </div>
                                    <div class="form-group"></div>
                                    <div class="btn-group-sm">
                                        <button type="button" class="btn btn-default" id="btn-create-site">Submit
                                        </button>
                                        <input type="hidden" value="{{Session::token()}}" name="_token">
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                    </div>


                </div>
                {{--DataTables Section--}}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>Site Information</h5>
                    </div>

                    <div id="tabs">
                        <ul>
                            <li><a href="#tabs-1">All Sites</a></li>
                            <li><a href="#tabs-2">Streetlights</a></li>
                            <li><a href="#tabs-3">Medium Sites</a></li>
                            <li><a href="#tabs-4">Billboard</a></li>
                        </ul>
                        <div id="tabs-1">
                            <table id="vTable1" class="table table-hover table-bordered viewTable">
                                <thead>
                                <th>Site ID</th>
                                <th>Landmark</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Size</th>
                                <th>Status</th>
                                <th>Edit</th>
                                </thead>
                                <tbody>
                                @foreach($sites as $site)


                                    <tr role="row" class="odd">

                                        <td class="sorting_1">{{$site->id}}</td>
                                        <td>{{$site->landmark}}</td>
                                        <td>{{$site->latitude}}</td>
                                        <td>{{$site->longitude}}</td>
                                        <td>{{$site->size}}</td>
                                        <td>{{$site->status}}</td>

                                        <td><a class="edit" href="#">Update</a></td>


                                    </tr>
                                @endforeach
                                </tbody>

                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Site ID</th>
                                    <th rowspan="1" colspan="1">Landmark</th>
                                    <th rowspan="1" colspan="1">Latitude</th>
                                    <th rowspan="1" colspan="1">Longitude</th>
                                    <th rowspan="1" colspan="1">Size</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1">Edit</th>
                                </tr>
                                </tfoot>


                            </table>
                        </div>
                        <div id="tabs-2">
                            <table id="vTable2" class="table table-hover table-bordered viewTable">
                                <thead>
                                <th>Site ID</th>
                                <th>Landmark</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Size</th>
                                <th>Status</th>
                                <th>Edit</th>
                                </thead>
                                <tbody>
                                @foreach($sites as $site)


                                    <tr role="row" class="odd">

                                        <td class="sorting_1">{{$site->id}}</td>
                                        <td>{{$site->landmark}}</td>
                                        <td>{{$site->latitude}}</td>
                                        <td>{{$site->longitude}}</td>
                                        <td>{{$site->size}}</td>
                                        <td>{{$site->status}}</td>

                                        <td><a class="edit" href="#">Update</a></td>


                                    </tr>
                                @endforeach
                                </tbody>

                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Site ID</th>
                                    <th rowspan="1" colspan="1">Landmark</th>
                                    <th rowspan="1" colspan="1">Latitude</th>
                                    <th rowspan="1" colspan="1">Longitude</th>
                                    <th rowspan="1" colspan="1">Size</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1">Edit</th>
                                </tr>
                                </tfoot>


                            </table>
                        </div>
                        <div id="tabs-3">
                            <table id="vTable3" class="table table-hover table-bordered viewTable">
                                <thead>
                                <th>Site ID</th>
                                <th>Landmark</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Size</th>
                                <th>Status</th>
                                <th>Edit</th>
                                </thead>
                                <tbody>
                                @foreach($sites as $site)


                                    <tr role="row" class="odd">

                                        <td class="sorting_1">{{$site->id}}</td>
                                        <td>{{$site->landmark}}</td>
                                        <td>{{$site->latitude}}</td>
                                        <td>{{$site->longitude}}</td>
                                        <td>{{$site->size}}</td>
                                        <td>{{$site->status}}</td>

                                        <td><a class="edit" href="#">Update</a></td>


                                    </tr>
                                @endforeach
                                </tbody>

                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Site ID</th>
                                    <th rowspan="1" colspan="1">Landmark</th>
                                    <th rowspan="1" colspan="1">Latitude</th>
                                    <th rowspan="1" colspan="1">Longitude</th>
                                    <th rowspan="1" colspan="1">Size</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1">Edit</th>
                                </tr>
                                </tfoot>


                            </table>
                        </div>
                        <div id="tabs-4">
                            <table id="vTable4" class="table table-hover table-bordered viewTable">
                                <thead>
                                <th>Site ID</th>
                                <th>Landmark</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Size</th>
                                <th>Status</th>
                                <th>Edit</th>
                                </thead>
                                <tbody>
                                @foreach($sites as $site)


                                    <tr role="row" class="odd">

                                        <td class="sorting_1">{{$site->id}}</td>
                                        <td>{{$site->landmark}}</td>
                                        <td>{{$site->latitude}}</td>
                                        <td>{{$site->longitude}}</td>
                                        <td>{{$site->size}}</td>
                                        <td>{{$site->status}}</td>

                                        <td><a class="edit" href="#">Update</a></td>


                                    </tr>
                                @endforeach
                                </tbody>

                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Site ID</th>
                                    <th rowspan="1" colspan="1">Landmark</th>
                                    <th rowspan="1" colspan="1">Latitude</th>
                                    <th rowspan="1" colspan="1">Longitude</th>
                                    <th rowspan="1" colspan="1">Size</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1">Edit</th>
                                </tr>
                                </tfoot>


                            </table>
                        </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
                    <script src="{{URL::to('src/js/styletabs.js')}}"></script>
                </div>

            </div>
        </div>


    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Sites</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon input-sm" id="basic-addon1">Landmark</span>
                            <input type="text" class="form-control input-sm" name="site-landmark" id="site-landmark">
                        </div>
                        <div class="form-group">

                        </div>

                        <div class="input-group">
                            <span class="input-group-addon input-sm" id="basic-addon1">Latitude</span>
                            <input type="text" class="form-control input-sm" name="site-latitude" id="site-latitude"
                                   disabled>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="input-group">
                            <span class="input-group-addon input-sm" id="basic-addon1">Longitude</span>
                            <input type="text" class="form-control input-sm" name="site-longitude" id="site-longitude"
                                   disabled>
                        </div>
                        <div class="form-group"></div>
                        <div class="input-group">
                            <span class="input-group-addon input-sm" id="basic-addon1">Size</span>
                            <select class="form-control input-sm" id="site-size" name="site-size">
                                <option value=""></option>
                                <option value="Billboard">Billboard</option>
                                <option value="Medium">Medium</option>
                                <option value="StreetLight">Streetlight</option>
                            </select>
                        </div>

                        <div class="form-group"></div>

                    </form>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="site-modal-save">Save changes</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{--Record Transaction Modal--}}



    <div class="modal fade bd-example-modal-sm" id="transaction-modal" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="panel panel-default-sm">
                    <div class="panel-heading">
                        Manage Sites
                        <div id="theid"></div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('save.transaction')}}" method="post" class="form-group-sm">
                            <div class="input-group">
                                <span class="input-group-addon input-sm">Site Id</span>
                                <input type="text" id="the-site-id" name="the-site-id" class="form-control input-sm">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm ">Client Name</span>
                                <input type="text" class="form-control input-sm typeahead" id="tmpclient_name"
                                       name="tmpclient_name" autocomplete="off">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm">Event</span>
                                <select class="form-control input-sm" name="event" id="event">
                                    <option value="Book">Book</option>
                                    <option value="Close">Close</option>
                                    <option value="Open">Open</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm">Start Date</span>
                                <input type="date" class="form-control input-sm" id="start_date" name="start_date">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm">Duration</span>
                                <input type="number" class="form-control input-sm" id="duration" name="duration">
                            </div>

                            <textarea name="comment" id="comment" class="form-control input-sm"
                                      placeholder="Comment"></textarea>

                            <div class="btn-group">
                                <button class="btn btn-default input-sm" type="submit" id="record-transaction"> Record
                                </button>
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{URL::to('/src/js/typeahead.bundle.js')}}"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?libraries=drawing,geometry&key=AIzaSyAHSZHfNanEI64wMO0M6URymVBIGOh3wSA&callback=initMap">
    </script>
    <script src="{{URL::to('src/js/maps.js')}}"></script>
    <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
    <script src="{{URL::to('/src/js/handlebars-v4.0.5.js')}}"></script>
    <script src="{{URL::to('/src/js/clientnametypeahead.js')}}">

    </script>
    <script>
        var token = '{{Session::token()}}';
        var urlEdit = '{{route('edit.site')}}';

    </script>
    <script>
        var token = '{{Session::token()}}';
        var urlCreateSite = '{{route('site.create')}}';

    </script>
    <script>
        var token = '{{Session::token()}}';
        var urlSaveTransaction = '{{route('save.transaction')}}';
    </script>
@endsection