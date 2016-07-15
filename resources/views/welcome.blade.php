@extends('layouts.blankmaster')

@section('title')
    Welcome
@endsection
@section('content')
    @include('includes.message-block')
<section>
    <div class="container">
        <div class="row">
          <div class="col-md-3 col-md-offset-3">
              <h4>Sign In</h4>
              <form action="{{route('signin')}}" method="post" class="form-horizontal">
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Email</span>
                      <input type="email" class="form-control" id="email"  name="email" >
                  </div>
                  <div class="form-group">

                  </div>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Password</span>
                      <input type="password" class="form-control" id="password" name="password" >
                  </div>
                  <div class="form-group">

                  </div>
                  <button type="submit" class="btn btn-primary">Sign In</button>
                  <input type="hidden" name="_token" value="{{Session::token()}}">
              </form>
          </div>
          <div class=" col-md-3 ">
              <h4>Sign Up</h4>
              <form action="{{route('signup')}}" method="post">
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Email</span>
                      <input type="email" class="form-control " id="email" name="email" >
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Username</span>
                      <input type="text" class="form-control" id="username" name="username">
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Password</span>
                      <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Confirm Password</span>
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password" >
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Role</span>
                      <input type="text" class="form-control" id="InputRole" name="role">
                  </div>
                  <div class="form-group">

                  </div>
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                  <input type="hidden" name="_token" value="{{Session::token()}}">
              </form>
          </div>
      </div>

  </div>
</section>

@endsection