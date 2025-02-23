@extends('master_admin')
@section('content_admin')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Product List <a href="/admin_dash" class="float-right btn btn-warning">Dashboard</a></h3> 
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>image</th>
                                <th>Sku</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                            @foreach($products as $product) 
                            @php
                                $img = explode(",", $product['image']);
                            @endphp
                            <tr>
                                <th><img src="{{asset('images/'.$img[0])}}" width="100px" height="100px" alt=""></th>
                                <td>{{$product['sku']}}</td>
                                <td>{{$product['name']}}</td>
                                <td>{!!$product['description']!!}</td>
                                <td>{{$product['qty']}}</td>
                                <td>{{$product['price']}}</td>                   
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
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
<br><br>

<style>
    .w-5{
        display: none;
    }
</style>

@endsection