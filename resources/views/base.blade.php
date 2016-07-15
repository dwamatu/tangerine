@extends('layouts.master')

@section('title')
    Base
@endsection
@section('content')

    <section>

    <div class="row ">
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body">
                <div class="row">
                    <div class="col-md-3">
                        <form action="" method="post">
                            <div class="input-group">
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

                            </div>
                            <div class="input-group">
                                <span class="input-group-addon custom_label" id="basic-addon1">Landmark</span>
                                <input type="text" class="form-control custom_label"  name="landmark" id="landmark">
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
                                <span class="input-group-addon custom_label" id="basic-addon1">Latitude</span>
                                <input type="text" class="form-control custom_label"  name="latitude" id="latitude">
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
                                <button type="submit" class="btn btn-default custom_label ">New</button>
                                <button type="submit" class="btn btn-default custom_label ">Update</button>
                                <button type="submit" class="btn btn-default custom_label ">Delete</button>
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

                <div class="row">
                    <div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="example_length">
                                    <label>Show <select name="example_length" aria-controls="example" class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
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
                                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 76px;">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 129px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 55px;">Office</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 49px;">Start date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 49px;">Salary</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                        <th rowspan="1" colspan="1">Salary</th></tr>
                                    </tfoot>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-7">
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
                </div>

            </div>
        </div>
    </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection