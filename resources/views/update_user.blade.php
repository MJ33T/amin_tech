@extends('master_admin')
@section('content_admin')
<br>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update User ({{$user['name']}})<a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a></h3> 
                </div>
                <div class="card-body">
                    <form action="/update_user" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="hidden" name="id" value="{{$user['id']}}">
                                        <input type="text" name="name" value="{{$user['name']}}" class="form-control" placeholder="Enter User Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{$user['email']}}" class="form-control" placeholder="Enter User Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{$user['phone']}}" class="form-control" placeholder="Enter User Phone Number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{$user['address']}}" class="form-control" placeholder="Enter User Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection