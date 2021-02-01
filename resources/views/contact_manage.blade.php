@extends('master_admin')
@section('content_admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">All Contact Request <a href="/admin_dash" class="float-right btn btn-warning">Dashboard</a></h3> 
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Contact Name</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact['name']}}</td>  
                                <td><a class="btn btn-block btn-success" href="view_contact/{{Crypt::encrypt($contact['id'])}}">View</a></td>
                                <td><a class="btn btn-block btn-danger" href="delete_contact/{{Crypt::encrypt($contact['id'])}}">Delete</a></td>
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