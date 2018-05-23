<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
    	$categories = Category::all();
    	return view('category.index', ['categories' => $categories]);
    }

    public function create() {
    	$categories = Category::pluck('name', 'id');
    	return view('category.create', ['parent_categories' => $categories]);
    }

    public function store(Request $request){
    	$category = new Category();
    	$category->name = $request->get('name');
    	$category->parent_id = $request->get('parent_id');
    	if($category->save()){
    		return redirect('dashboard/category')->with('success', 'Information has been added');
    	}
    }
    public function edit($id) {
    	$category = Category::find($id);
    	$categories = Category::pluck('name', 'id');
    	return view('category.edit', ['category' => $category, 'parent_categories' => $categories]);
    }
    public function update(Request $request, $id){
    	$category = Category::find($id);
    	$category->name = $request->get('name');
    	$category->parent_id = $request->get('parent_id');
    	if($category->update()){
    		return redirect('dashboard/category')->with('success', 'Information has been added');
    	}
    }

    public function destroy($id) {
    	Product::where('category_id', $id)->delete();
    	Category::find($id)->delete();
    	return redirect('dashboard/category');
    }
}
