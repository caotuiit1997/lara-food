<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Image;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	private $image_path = 'upload/product/';
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function create() {
        $categories = Category::all();
        $categories = Category::pluck('name', 'id');
    	return view('product.create', ['categories' => $categories, 'parent_categories' => $categories]);
    }

    public function store(Request $request) {
    	$product = new Product();
    	if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = rand(1000, 999999) .'_'. time() . '.' . $image->getClientOriginalExtension();
        }
    	$product->name = $request->get('name');
    	$product->price = $request->get('price');
    	$product->image = $this->image_path.$filename;
    	$product->description = $request->get('description');
        $product->category_id = $request->get('category_id');
    	if ($product->save()) {
    		Image::make($image)->save(public_path( $this->image_path . $filename));
    		return redirect('/dashboard/product')->with('success', 'Sản phẩm đã được thêm vào');
    	}else {
            return redirect()->back()->with('error', 'Có lỗi đã xảy ra! Vui lòng thử lại');
        }
    }

    public function show($id) {
    	$product = Product::find($id);
    	return view('product.show', ['product' => $product]);
    }

    public function edit($id) {
    	$product = Product::find($id);
        $categories = Category::pluck('name', 'id');
    	return view('product.edit', ['product' => $product, 'parent_categories' => $categories]);
    }

    public function update(Request $request, $id) {
    	$product = Product::find($id);
    	if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = rand(1000, 999999) .'_'. time() . '.' . $image->getClientOriginalExtension();
        }
    	$product->name = $request->get('name');
    	$product->price = $request->get('price');
    	$product->image = $this->image_path.$filename;
    	$product->description = $request->get('description');
        $product->category_id = $request->get('category_id');
    	if ($product->update()) {
    		Image::make($image)->save(public_path($this->image_path. $filename));
    		return redirect('/dashboard/product')->with('success', 'Information has been added');
    	}
    }

    public function destroy($id) {
    	Product::find($id)->delete();
    	return redirect('dashboard/product')->with('success', 'Delete');
    }

}
