@extends('layouts.master')

@section('title')
    System Users
@endsection
@section('content')
    <style>
        .container-fluid {
            padding-top: 50px;
        }
    </style>
    <section class="row">
        <div class="container-fluid">
            <div class="main-content">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>Users Table</h5>
                    </div>
                    <div class="panel-body">
                        <table id="dataTable" class="table table-bordered table-stripped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <td>#</td>
                                <th>Username</th>
                                <th>Email Address</th>
                                <th>Role</th>
                                <th>Update</th>


                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <td>#</td>
                                <th>Username</th>
                                <th>Email Address</th>
                                <th>Role</th>
                                <th>Update</th>

                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$user->id}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td><a class="edituser" href="#">Update</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <style>
        .padd {

            padding-top: 2px;
        }

        .modal-dialog {
            width: 25%;
        }
    </style>
    <div class="modal fade" tabindex="-1" role="dialog" id="new_userform">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="" method="post">
                            <div class="input-group">
                                <span class="input-group-addon input-sm" id="basic-addon1">Email</span>
                                <input type="email" class="form-control input-sm" id="email" name="email" required>
                            </div>
                            <div class="input-group padd">
                                <span class="input-group-addon input-sm" id="basic-addon1">Username</span>
                                <input type="text" class="form-control input-sm" id="username" name="username">
                            </div>
                            <div class="input-group padd">
                                <span class="input-group-addon input-sm" id="basic-addon1">Password</span>
                                <input type="password" class="form-control input-sm" id="password" name="password"
                                       required>
                            </div>
                            <div class="input-group padd">
                                <span class="input-group-addon input-sm" id="basic-addon1">Confirm Password</span>
                                <input type="password" class="form-control input-sm" id="confirm_password"
                                       name="confirm_password">
                            </div>
                            <div class="input-group padd">
                                <span class="input-group-addon input-sm" id="basic-addon1">Role</span>
                                <select type="text" class="form-control input-sm" id="role" name="role">
                                    <option value=""></option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    <option value="Sales">Sales</option>
                                </select>
                            </div>
                            <div class="btn-group padd">
                                <button type="button" class="btn btn-primary input-sm" id="btn-registeruser">Register
                                    User
                                </button>
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        var urlRegisterUser = '{{route('signup')}}';
        var token = '{{Session::token()}}'
    </script>

@endsection