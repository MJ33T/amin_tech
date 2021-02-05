@extends('master_admin')
@section('content_admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add New Product <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a></h3> 
                </div>
                <div class="card-body">
                    <form action="/add_product" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name">        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Sku</label>
                                        <input type="text" name="sku" class="form-control" placeholder="Enter Sku">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Description (with Tag)</label>
                                        <input type="text" name="description" class="form-control" placeholder="Enter Description with Tag">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Price (with GBP)</label>
                                        <input type="text" name="price" class="form-control" placeholder="Enter Price with GBP">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" name="qty" class="form-control" placeholder="Enter Quantity">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image (Multiple)</label>
                                        <input type="file" name="upload_file[]" class="custom-file" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection