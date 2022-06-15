<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

/**
 * @group Category
 * Category Details 
 */

class CategoryController extends Controller
{
    /**
     * Display all categories
     * List all available categories
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Insert new category
     * @bodyParam category_name string required The name of the category.
     * @response 200 {
        "message" : "Category Added Successfully"
     * }
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required | unique:categories'
        ]);
        $info = Category::create($request->all());
        if ($info) {
            return response(['success' => 'Category Added Successfully.'], 200);
        }
    }

    /**
     * Display specified category
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Category::find($id);
    }

    /**
     * Update specified category
     * @bodyParam category_name string required The name of the category.
     * @response 200 {
        "message": "Category Updated Successfully
     * }
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required'
        ]);
        $info = Category::find($id)->update($request->all());
        if ($info) {
            return response(['success' => 'Category Updated Successfully'], 200);
        }
    }

    /**
     * Remove specified category.
     * @param int $id 
     * @response 200 {
        "message":"Category Deleted Successfully"
     * }
     */
    public function destroy($id)
    {
        $info = Category::find($id)->delete();
        if ($info) {
            return response(['success' => 'Category Deleted Successfully.'], 200);
        }
    }
}
