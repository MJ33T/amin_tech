@extends('master_admin')
@section('content_admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">All User List</h3>
                    <a href="/admin_dash" class="float-right btn btn-warning">Dashboard</a>
                    <a href="/add_user" class="btn btn-primary">Add User</a>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Phone</th>
                                <th>User Address</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user['id']}}</td> 
                                <td>{{$user['name']}}</td>  
                                <td>{{$user['email']}}</td>
                                <td>{{$user['phone']}}</td>
                                <td>{{$user['address']}}</td>
                                <td><a class="btn btn-block btn-success" href="update_user/{{Crypt::encrypt($user['id'])}}">Update</a></td>
                                <td><a class="btn btn-block btn-danger" href="delete_user/{{Crypt::encrypt($user['id'])}}">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>   

@endsection