<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
            'category_id' => 'required'
        ]);

        $info = Product::create($request->all());
        if ($info) {
            return $info;
        } else {
            return response(['message' => 'Something went wrong']);
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
            $product->delete();
            return $response(['message' => 'Product Deleted Successfully.']);
        } else {
            return response(['message' => 'No product found.']);
        }
    }
}
