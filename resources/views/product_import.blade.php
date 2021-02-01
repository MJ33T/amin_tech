@extends('master_admin')
@section('content_admin')
<br>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Import CSV <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a></h3> 
                </div>
                <div class="card-body">
                    <form action="/product_import" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Upload</label>
                                        <input type="file" name="upload_file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection