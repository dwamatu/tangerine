@extends('layouts.blankmaster')

@section('title')
    Welcome
@endsection
@section('content')
    @include('includes.message-block')
    <section>
        <div class="container">
            <div class="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <h5>Sign In</h5>
                        <form action="" method="post" class="form-horizontal">
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Email</span>
                                <input type="email" class="form-control input-sm" id="signin_email" name="signin_email"
                                       value="{{ old('email')}}" required>
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Password</span>
                                <input type="password" class="form-control input-sm" id="signin_password"
                                       name="signin_password"
                                       value="{{old('password')}}" required>
                            </div>
                            <div class="form-group">

                            </div>
                            <button type="button" class="btn btn-primary input-sm" id="btn-signIn">Sign In</button>
                            <input type="hidden" name="_token" value="{{Session::token()}}">
                        </form>
                    </div>
                </div>
            </div>

            <script>
                var urlSignin = '{{route('signin')}}';
                var token = '{{Session::token()}}';
            </script>

        </div>
    </section>

@endsection