@php
    $img = explode(",", $product['image']);
    $arr_len = count($img);
    for($i=0; $i<$arr_len; $i++){
        $active[$i] = '';
        if($i == 0){
            $active[$i] = 'active';
        }
    }
@endphp
@extends('master')
@section('content')
<br>
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
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @for($i=0; $i<$arr_len-1; $i++)
                                        <div class="carousel-item {{$active[$i]}}">
                                            <img class="d-block w-100" src="{{asset('images/'.$img[$i])}}" width="500px" height="500px">
                                        </div>
                                        @endfor
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </div>
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