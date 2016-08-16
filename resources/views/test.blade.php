@extends('layouts.master')

@section('title')
    Test Page
@endsection
@section('content')
    @include('includes.message-block')
    <section class="row" style="padding-top: 40px">


        <div class="row">
            <div class="col-md-3 col-md-offset-3">


                <select class="form-control" name="teststatus" id="teststatus">

                </select>
    </div>
        </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script>

            $('#teststatus').empty();
            /* var dropDown = document.getElementById("carId");
             var carId = dropDown.options[dropDown.selectedIndex].value;*/
            $.ajax({
                type: "GET",
                url: "http://tangerine.local/getStatus",
                data: {'status': status},
                success: function (data) {
                    // Parse the returned json data
                    var opts = $.parseJSON(data);
                    console.log(data);
                    // Use jQuery's each to iterate over the opts value
                    $.each(opts, function (i, d) {
                        // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                        $('#teststatus').append('<option value="' + d.id + '">' + d.status + '</option>');
                    });
                }
            });

    </script>
    </section>
@endsection