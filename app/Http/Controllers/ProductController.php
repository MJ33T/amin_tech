<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;
class ProductController extends Controller
{
    function import_view(){
        if(session()->has('user')){
            return view('product_import');
        }
        else{
            return redirect('login');
        }
    }

    function import(Request $req){
        $upload = $req->file('upload_file');
        $filepath = $upload->getRealPath();
        $file = fopen($filepath, 'r');
        $header = fgetcsv($file);

        $escapedHeader =[];

        foreach ($header as $key => $value){
            $lheader = strtolower($value);
            $escapedItem = preg_replace('/[^a-z]/', '', $lheader);
            array_push($escapedHeader, $escapedItem);
        } 
        
        while($columns = fgetcsv($file)){
            $data = array_combine($escapedHeader, $columns);

            $sku = $data['sku'];
            $name = $data['name'];
            $description = $data['description'];
            $qty = $data['qty'];
            $price = $data['price'];
            $image = $data['image'];

            $url = $data['image'];
            $extension = pathinfo($url, PATHINFO_EXTENSION);
            $filename = $data['sku'].'.'.$extension;

            $image = file_get_contents($url);
            $save = file_put_contents('images/'.$filename, $image);
            
            $product = new Product;
            $product->sku = $sku;
            $product->name = $name;
            $product->description = $description;
            $product->qty = $qty;
            $product->price = $price;
            $product->image = $filename;
            $product->save();   

        }
        return redirect('/product_list');
    }

    function product_list(){
        $product = Product::paginate(10);
        return view('product_list', ['products'=>$product]);
    }

    function product_list_public(){
        $product = Product::paginate(20);
        return view('product_list_public', ['products'=>$product]);
    }

    function product_detail($id){
        $pid = \Crypt::decrypt($id);
        $product = Product::find($pid);
        return view('product_detail', ['product'=>$product]);
    }
}
