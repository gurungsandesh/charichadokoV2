<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

/**
 * @group Product Details
 * List all the product operations
 */

class ProductController extends Controller
{
    /**
     * Display all available products
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Insert new product
     * @bodyParam product_name string required The name of the product
     * @bodyParam order int required The arrangement of the product
     * @bodyParam category_id int required The id of the category
     * @response 200 {
        "message" : "Product Added Successfully"
     * }
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required | unique:products',
            'order' => 'required | unique:products',
            'category_id' => 'required',
            'price' => 'required | numeric',
            'file'  => 'required | mimes:jpg,jpeg'
        ]);
        $fileName = $request->file->getClientOriginalName();
        $newFileName = time().$fileName;
        $isUploaded = $request->file('file')->storePubliclyAs('public/product', $newFileName); 
        $info = Product::create([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'order' => $request->order,
            'price' => $request->price,
            'file' => $newFileName
        ]);
        if (!$info || !$isUploaded) {
            return response(['message' => 'Something went wrong']);
        } else {
            return $info;
        }
    }

    /**
     * Display specific product
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return $product;
        } else {
            return response(['message' => 'No product found.']);
        }
    }

    /**
     * Update specific product
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @bodyParam category_id int required The id of category
     * @bodyParam product_name  string required The name of Product
     * @response 200 {
        "message": "Product Updated Successfully
     * }
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'order' => 'required | unique:products',
            'product_name' => 'required | unique:products'
        ]);

        $info = Product::find($id)->update($request->all());
        if ($info) {
            return response(['message' => 'Product Updated Successfully.']);
        } else {
            return response(['message' => 'Something went wrong.']);
        }
    }

    /**
     * Delete specific product
     * @param  int  $id
     * @response 200 {
        "message" : "Product Deleted Successfully"
     * }
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $fileDeleted = Storage::delete('public/product/'.$product->file);
            $detailDeleted = $product->delete();
            if (!$fileDeleted || !detailDeleted) {
                return response(['message' => 'Product Deleted Successfully.']);
            } else {
                return response(['message' => 'Something went wrong.']);
            }
        } else {
            return response(['message' => 'No product found.']);
        }
    }
}
