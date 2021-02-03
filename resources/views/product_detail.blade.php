@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h1>Product Details</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="image">
                                    <img src="{!!'images/'.$product['image']!!}" width="500px" height="500px">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label><h3>Name: </h3></label>
                                <h5>{{$product['name']}}</h5>
                                <label><h3>Sku: </h3></label>
                                <h5>{{$product['sku']}}</h5>
                                <label><h3>Description: </h3></label>
                                <h5>{!!$product['description']!!}</h5>
                                <label><h3>Price: </h3></label>
                                <h5>{{$product['price']}}</h5>
                                <label><h3>Quantity: </h3></label>
                                <h5>{{$product['qty']}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
@endsection