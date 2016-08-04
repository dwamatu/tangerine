@extends('layouts.master')

@section('title')
    Test Page
@endsection
@section('content')
    @include('includes.message-block')

    <div class="row ">
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="main-content">
                {{--<div class="col-md-3 col-md-offset-9">
                    <button id="clickme" type="button">Click Me</button>

                </div>--}}

                <div class=" col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h5>Add Site</h5>
                        </div>
                        <div class="panel-body">
                            <form>
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
                                           id="latitude">
                                </div>
                                <div class="form-group"></div>
                                <div class="input-group">
                                                <span class="input-group-addon custom_label"
                                                      id="basic-addon1">Longitude</span>
                                    <input type="text" class="form-control input-sm" name="longitude"
                                           id="longitude">
                                </div>
                                <div class="form-group"></div>
                                <div class="input-group">
                                    <span class="input-group-addon input-sm" id="basic-addon1">Size</span>
                                    <select class="form-control input-sm" id="size" name="size">
                                        <option value=""></option>
                                        <option value="StreetLight">Streetlight</option>
                                        <option value="Billboard">Billboard</option>
                                        <option value="Medium">Medium</option>

                                    </select>
                                </div>
                                <div class="form-group"></div>
                                <div class="input-group">
                                    <span class="input-group-addon input-sm" id="basic-addon1">Status</span>
                                    <select class="form-control input-sm" id="status" name="status">
                                        <option value=""></option>
                                        <option value="Open">Open</option>
                                        <option value="Close">Close</option>

                                    </select>
                                </div>
                                <div class="form-group"></div>
                                <div class="btn-group-sm">
                                    <button id="submit" type="button" class="btn btn-default ">Submit
                                    </button>
                                    <input type="hidden" value="{{Session::token()}}" name="_token">
                                </div>


                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{URL::to('/src/js/jquery.noty.packaged.js')}}"></script>
    <script>

        $('#clickme').on('click', function () {
            /* var n = noty({
             text: 'NOTY - a jquery notification library!',
             animation: {
             open: 'animated bounceInLeft', // Animate.css class names
             close: 'animated bounceOutLeft', // Animate.css class names
             easing: 'swing', // unavailable - no need
             speed: 500 // unavailable - no need
             }
             });*/
            var n = noty({
                text: 'NOTY - a jquery notification library!',
                type: 'alert',
                dismissQueue: true,
                layout: 'topLeft',
                closeWith: ['click'],
                theme: 'relax',
                maxVisible: 10,
                animation: {
                    open: 'animated bounceInLeft',
                    close: 'animated bounceOutLeft',
                    easing: 'swing',
                    speed: 500
                }
            });
        });
        $('#submit').on('click', function () {
            if (!$('#landmark').val())showError('Landmark is required');
            else if (!$('#longitude').val())showError('Longitude is required');
            else if (!$('#latitude').val())showError('Latitude is required');
            else {

            }


        });


        function showError(msg) {
            var n = noty({
                text: msg,
                maxVisible: 5,
                animation: {
                    open: 'animated bounceInLeft', // Animate.css class names
                    close: 'animated bounceOutLeft', // Animate.css class names
                    easing: 'swing', // unavailable - no need
                    speed: 500 // unavailable - no need
                }
                , timeout: true,
            });

        }
    </script>


@endsection