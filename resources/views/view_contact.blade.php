@extends('master_admin')
@section('content_admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{$contact['name']}} Request <a href="/admin_dash" class="float-right btn btn-warning">Dashboard</a></h3> 
                </div>
                <div class="card-body">
                    <label>Name: </label>
                    <h4>{{$contact['name']}}</h4>
                    <br>
                    <label>Email: </label>
                    <h4>{{$contact['email']}}</h4>
                    <br>
                    <label>Subject: </label>
                    <h4>{{$contact['subject']}}</h4>
                    <br>
                    <label>Message: </label>
                    <h4>{{$contact['message']}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection