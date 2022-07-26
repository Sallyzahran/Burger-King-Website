<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductRequestUpdate;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {

        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {

        return view('admin.products.create');
    }



    public function store(ProductRequest $request,$id)
    {
        $path = $request->main_image->store('public/products');

        Product::create([

          'name' => $request->name,
          'description' => $request->description,
          'price' => $request->price,
          'sale_price' => $request->sale_price,
          'category' => $request->category,
          'category' => $request->category,
          'main_image' => $path,


        ]);

        return redirect()->route('admin.products.index');
    }



    public function edit($id)
    {

        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));

    }

    public function update(ProductRequestUpdate $request, $id)
    {
        $product = Product::find($id);

        if($request->has('main_image')){

            $path = $request->main_image->store('public/images');

        }else{
            $path = $product->main_image;
        }
          $product->name = $request->name;
          $product->description = $request->description;
          $product->price = $request->price;
          $product->sale_price = $request->sale_price;
          $product->category = $request->category;
          $product->main_image = $path;
          $product->save();

          return redirect()->route('admin/products');


    }




    public function show($id)
    {

    }



    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('admin/products');

    }
}
