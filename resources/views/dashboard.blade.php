@extends('layouts.master')

@section('title')
    Dashboard
@endsection
@section('content')
    @include('includes.message-block')
    <section class="row ">
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form action="{{route('site.create')}}" method="post">
                                <div class="input-group">
                                    <h4 align="center">Add Site</h4>
                                </div>

                                {{--   <div class="input-group">
                                       <span class="input-group-addon custom_label" id="basic-addon1">Site Id</span>
                                       <input type="text" class="form-control custom_label"  name="site_id" id="site_id" disabled>
                                   </div>
                                   <div class="form-group">

                                   </div>
                                   <div class="input-group">
                                       <span class="input-group-addon custom_label" id="basic-addon1">Site Name</span>
                                       <input type="text" class="form-control custom_label"  name="site_name" id="site_name" disabled>
                                   </div>
                                   <div class="form-group">

                                   </div>--}}
                                <div class="input-group">
                                    <span class="input-group-addon custom_label" id="basic-addon1">Landmark</span>
                                    <input type="text" class="form-control custom_label"  name="landmark" id="landmark">
                                </div>
                                <div class="form-group">

                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon custom_label" id="basic-addon1">Latitude</span>
                                    <input type="text" class="form-control custom_label"  name="latitude" id="latitude">
                                </div>
                                <div class="form-group">

                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon custom_label" id="basic-addon1">Longitude</span>
                                    <input type="text" class="form-control custom_label" name="longitude" id="longitude">
                                </div>
                                <div class="form-group">

                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon custom_label" id="basic-addon1">Size</span>
                                    <input type="text" class="form-control custom_label"  name="size" id="size">
                                </div>
                                <div class="form-group">

                                </div>

                                <div class="btn-group button-group">
                                    <button type="submit" class="btn btn-default custom_label ">Submit</button>
                                    <input type="hidden" value="{{Session::token()}}" name="_token">
                                </div>


                            </form>
                        </div>
                        <div class="col-md-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div id="gmap" style="with:300px;height:400px;"></div>

                                </div>
                            </div>


                        </div>
                    </div>

                    <section class="panel panel-default padd">
                        <div class="panel-heading">Site Information</div>
                        <div class="panel-body">


                            <table id="myTable" class="table table-hover table-bordered dataTable">
                                <thead>
                                <th>Site ID</th>
                                <th>Landmark</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Size</th>
                                {{-- <th>Added by</th>--}}
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
                                        {{--  <td>{{$site->user->username}}</td>--}}
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
                                    {{-- <th rowspan="1" colspan="1">Added by</th>--}}
                                    <th rowspan="1" colspan="1">Edit</th>
                                </tr>
                                </tfoot>


                            </table>
                                    </div>


                    </section>

                </div>
            </div>
        <script type="text/javascript">

        </script>

    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Sites</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon custom_label" id="basic-addon1">Landmark</span>
                            <input type="text" class="form-control custom_label"  name="site-landmark" id="site-landmark">
                        </div>
                        <div class="form-group">

                        </div>

                        <div class="input-group">
                            <span class="input-group-addon custom_label" id="basic-addon1">Latitude</span>
                            <input type="text" class="form-control custom_label"  name="site-latitude" id="site-latitude">
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="input-group">
                            <span class="input-group-addon custom_label" id="basic-addon1">Longitude</span>
                            <input type="text" class="form-control custom_label" name="site-longitude" id="site-longitude">
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="input-group">
                            <span class="input-group-addon custom_label" id="basic-addon1">Size</span>
                            <input type="text" class="form-control custom_label"  name="site-size" id="site-size">
                        </div>
                        <div class="form-group">

                        </div>

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

    <script>
        var token = '{{Session::token()}}';
        var urlEdit = '{{route('edit.site')}}';
    </script>
@endsection