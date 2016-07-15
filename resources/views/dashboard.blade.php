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
                            <p>
                                Lorem we gonna chung dolor sit amizzle, consectetuer adipiscing elizzle.
                                Rizzle gangster velit, get down get down pimpin', suscipit quis, gravida vizzle, arcu.
                                Pellentesque dawg tortizzle. Sed erizzle.
                                Da bomb check it out dolor dapibizzle fo shizzle my nizzle tempizzle fo shizzle my nizzle.
                                Maurizzle pellentesque nibh izzle turpizzle. Pimpin' izzle shizzlin dizzle.
                                Brizzle i saw beyonces tizzles and my pizzle went crizzle rhoncizzle break yo neck, yall.
                                +                    Izzle tellizzle fo shizzle, pretizzle shizznit, nizzle ac, eleifend black, nunc.
                                You son of a bizzle suscipit. Bizzle daahng dawg check it out sizzle fizzle.

                                Sizzle ullamcorpizzle. Fo shizzle sagittis phat a maurizzle.
                                Vestibulizzle shizzle my nizzle crocodizzle ipsum primis fizzle for sure orci bow wow wow izzle pizzle posuere cubilia Curae; Fo fizzle.
                                Fo shizzle habitant break it down tristique phat izzle fo shizzle mah nizzle fo rizzle, mah home g-dizzle yo mamma the bizzle that's the
                                shizzle brizzle own yo' egestas. Donec dang hendrerizzle velizzle. Bow wow wow erat volutpat. Its fo rizzle
                                tortizzle fizzle, scelerisque shizzlin dizzle, pimpin' i saw beyonces tizzles and my pizzle went crizzle, fringilla crackalackin,
                                arcu. Nulla its fo rizzle. Bizzle fermentizzle, uhuh ... yih! izzle pharetra aliquet, magna erizzle go to hizzle neque, gangster
                                ullamcorper shut the shizzle up dolizzle funky fresh bizzle. Vivamus ass neque, we gonna chung its fo rizzle, ornare da bomb, vulputate gizzle,
                                leo. For sure purus sizzle, bibendizzle sit amizzle, dope vehicula, dignissim dizzle, fo shizzle. Away ass ipsizzle at est brizzle tincidunt.
                                Sheezy mofo.
                                Its fo rizzle sure shiznit, tempor break it down, scelerisque cool, sodalizzle nec, felizzle. Etiam gravida.
                            </p>

                        </div>
                    </div>

                    <section class="row">
                        <div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="dataTables_length" id="example_length">
                                        <label>Show <select name="example_length" aria-controls="example" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label>
                                    </div>
                                </div>

                                <div class="col-md-offset-9">
                                    <div id="example_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Site ID: activate to sort column descending" style="width: 76px;">Site ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Landmark: activate to sort column ascending" style="width: 100px;">Landmark</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Latitude: activate to sort column ascending" style="width: 55px;">Latitude</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Longitude: activate to sort column ascending" style="width: 25px;">Longitude</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Size: activate to sort column ascending" style="width: 49px;">Size</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Added by: activate to sort column ascending" style="width: 49px;">Added by</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 29px;">Edit</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr><th rowspan="1" colspan="1">Site ID</th>
                                            <th rowspan="1" colspan="1">Landmark</th>
                                            <th rowspan="1" colspan="1">Latitude</th>
                                            <th rowspan="1" colspan="1">Longitude</th>
                                            <th rowspan="1" colspan="1">Size</th>
                                            <th rowspan="1" colspan="1">Added by</th>
                                            <th rowspan="1" colspan="1">Edit</th></tr>
                                        </tfoot>
                                        @foreach($sites as $site)
                                            <article class="site-data" data-siteid="{{$site->id}}">
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <div class="interaction">
                                                            <td class="sorting_1">{{$site->id}}</td>
                                                            <td>{{$site->landmark}}</td>
                                                            <td>{{$site->latitude}}</td>
                                                            <td>{{$site->longitude}}</td>
                                                            <td>{{$site->size}}</td>
                                                            <td>{{$site->user->username}}</td>
                                                            @if(Auth::user() == $site->user)
                                                                <td><a class="edit" href="#" >Update</a></td>
                                                            @endif

                                                        </div>
                                                    </tr>


                                                </tbody>
                                            </article>
                                            @endforeach

                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">

                                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-md-offset-8">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled" id="example_previous">
                                                <a href="#" aria-controls="example" data-dt-idx="0" tabindex="0">Previous</a>
                                            </li>
                                            <li class="paginate_button active">
                                                <a href="#" aria-controls="example" data-dt-idx="1" tabindex="0">1</a>
                                            </li>
                                            <li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0">2</a>
                                            </li>
                                            <li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0">3</a>
                                            </li><li class="paginate_button ">
                                                <a href="#" aria-controls="example" data-dt-idx="4" tabindex="0">4</a>
                                            </li>
                                            <li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0">5</a>
                                            </li>
                                            <li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0">6</a>
                                            </li>
                                            <li class="paginate_button next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

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
        var url = '{{route('edit.site')}}';
    </script>
@endsection