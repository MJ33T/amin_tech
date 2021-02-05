@extends('master')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Product List</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                    @foreach ($products as $product) 
                    @php
                        $img = explode(",", $product['image']);
                    @endphp   
                        <div class="col-md-3 product-grid">
                            <div class="image">
                                <a href="/product_detail/{{Crypt::encrypt($product['id'])}}">
                                    <img src="{{'images/'.$img[0]}}" width="200px" height="200px">
                                    <h6>{{$product['name']}}</h6>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <span>
                        {{$products->links()}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<style>
    .w-5{
        display: none;
    }
</style>
@endsection