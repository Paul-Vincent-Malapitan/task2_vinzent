<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{

    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');   
    }

    public function edit($id)
    {
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id' , $id)->first(),
        ];
        return view ('products' , $data);
    }

    public function save()
    {
        $id=$_POST['id'];
        $data = [
        'id' => $this ->request-> getVar('id'), 
        'upc' => $this ->request-> getVar('upc'), 
        'name' => $this ->request-> getVar('name'), 
        'quantity' => $this ->request-> getVar('quantity'), 
        'price' => $this ->request-> getVar('price'),
        'expiry_date' => $this ->request-> getVar('expiry_date'), 
        'created_at' => $this ->request-> getVar('created_at')
        ];

        if($id!=null){
            $this->product->set($data)->where('id' , $id)->update();
        }
        else{
            $this->product->insert($data);
        }
        return redirect()->to('/product');
    }

    public function product($product) 
    {
        echo $product;
    }

    public function vinzent()
    {
       $data['product'] = $this->product->FindAll();
       return view ('products', $data);
    }

    public function index()
    {
        //
    }
}
