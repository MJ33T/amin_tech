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
        if($req->session()->has('user')){
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
                
                $product = new Product;

                $sku = $data['sku'];
                $name = $data['name'];
                $description = $data['description'];
                $qty = $data['qty'];
                $price = $data['price'];
                $image = $data['image'];

                $url = $data['image'];
                $extension = pathinfo($url, PATHINFO_EXTENSION);
                $filename = $data['sku'].'.'.$extension;
                if(!empty($url)){
                    $image = file_get_contents($url);
                    $save = file_put_contents('images/'.$filename, $image);
                    $pd_save = file_put_contents('product_detail/images/'.$filename, $image);
                }
                
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
        else{
            return redirect('login');
        }
    }

    function product_list(){
        if(session()->has('user')){
            $product = Product::paginate(10);
            return view('product_list', ['products'=>$product]);
        }
        else{
            return redirect('login');
        }
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

    function add_edit_product(){
        if(session()->has('user')){
            $product = Product::paginate(20);
            return view('add_edit_product', ['products'=>$product]);
        }
        else{
            return redirect('login');
        }
    }

    function add_product_view(){
        return view('add_product');
    }

    function add_product(Request $req){
        if(session()->has('user')){
            $product = new Product;
            $count = 1;
            $all_img_name = '';
            if($req->has('upload_file')){
                $img_arr = $req->file('upload_file');
                $arr_len = count($img_arr);

                for($i=0; $i<$arr_len; $i++){
                    $extension = $img_arr[$i]->getClientOriginalExtension();
                    $img_name = $req->sku.'_'.$count.'.'.$extension;
                    $count++;
                    $save = public_path('images/');
                    $pd_save = public_path('product_detail/images/');
                    $img_arr[$i]->move($save, $img_name);
                    copy($save.$img_name, $pd_save.$img_name);

                    $all_img_name .= $img_name.',';
                    $final_name = rtrim($all_img_name, ',');
                }
                $product->name = $req->name;
                $product->sku = $req->sku;
                $product->description = $req->description;
                $product->price = $req->price;
                $product->qty = $req->qty;
                $product->image = $final_name;
                $product->save();
                return redirect('product_list');
            }
        }
        else{
            return redirect('login');
        }
    }

    function edit_product_view($id){
        $pid = \Crypt::decrypt($id);
        $product = Product::find($pid);
        return view('edit_product', ['product'=>$product]);
    }

    function edit_product(Request $req){

    }


}
