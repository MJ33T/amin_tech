@extends('master_admin')
@section('content_admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Product <a href="/admin_dash"><button class="float-right btn btn-warning">Dashboard</button></a></h3> 
                </div>
                <div class="card-body">
                    <form action="/edit_product" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$product['name']}}">        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Sku</label>
                                        <input type="text" name="sku" class="form-control" value="{{$product['sku']}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" value="{{$product['description']}}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" value="{{$product['price']}}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" name="qty" class="form-control" value="{{$product['qty']}}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="upload_file" class="custom-file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection