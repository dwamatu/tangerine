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


                <div class="customContainer" id="customContainer"></div>

                <style>
                    .customContainer {
                        padding-top: 100px;
                        margin-top: 10px;

                    }
                </style>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{URL::to('/src/js/jquery.noty.packaged.js')}}"></script>


    <script type="text/javascript">


        function generate(type, text) {

            var n = noty({
                text: text,
                type: type,
                dismissQueue: true,
                layout: 'topLeft',
                closeWith: ['click'],
                theme: 'relax',
                maxVisible: 10,
                timeout: '4000',
                animation: {
                    open: 'animated bounceInLeft',
                    close: 'animated bounceOutLeft',
                    easing: 'swing',
                    speed: 500
                }
            });
            console.log('html: ' + n.options.id);
        }

        function generateError() {
            var notification_html = '<div class="activity-item"> <i class="fa fa-check text-success"></i> ' +
                    '<div class="activity">You must  <a href="#">enter an area or address</a> ' +
                    '<span>Required by Google Maps Api</span> </div> </div>';

            generate('error', notification_html);

        }

        $(document).ready(function () {

            setTimeout(function () {
                generateError();
            }, 500);

        });

    </script>



@endsection