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
                    <div class="col-md-3 col-md-offset-3">
                        <h5>Sign In</h5>
                        <form action="" method="post" class="form-horizontal">
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Email</span>
                                <input type="email" class="form-control input-sm" id="email" name="email"
                                       value="{{ old('email')}}" required>
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Password</span>
                                <input type="password" class="form-control input-sm" id="password" name="password"
                                       value="{{old('password')}}" required>
                            </div>
                            <div class="form-group">

                            </div>
                            <button type="button" class="btn btn-primary input-sm" id="btn-signIn">Sign In</button>
                            <input type="hidden" name="_token" value="{{Session::token()}}">
                        </form>
                    </div>
                    <div class=" col-md-3 ">
                        <h5>Sign Up</h5>
                        <form action="{{route('signup')}}" method="post">
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Email</span>
                                <input type="email" class="form-control input-sm" id="email" name="email" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Username</span>
                                <input type="text" class="form-control input-sm" id="username" name="username">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Password</span>
                                <input type="password" class="form-control input-sm" id="password" name="password"
                                       required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Confirm Password</span>
                                <input type="password" class="form-control input-sm" id="confirm_password"
                                       name="confirm_password">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Role</span>
                                <input type="text" class="form-control input-sm" id="InputRole" name="role">
                            </div>
                            <div class="form-group">

                            </div>
                            <button type="button" class="btn btn-primary input-sm">Sign Up</button>
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