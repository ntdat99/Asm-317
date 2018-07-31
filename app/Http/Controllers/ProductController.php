<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/7/2018
 * Time: 10:21 AM
 */

namespace App\Http\Controllers;



use App\Category;
use App\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cagegories = Category::all();
        $categoryId = Input::get('categoryId');
        if ($categoryId == null || $categoryId == 0) {
            $obj = Product::orderBy('created_at', 'desc')->paginate(5);
            return view('admin.product.list')
                ->with('list_obj', $obj)
                ->with('categories', $cagegories)
                ->with('categoryId', $categoryId);
        } else {
            $obj = Product::where('categoryId', Input::get('categoryId'))->orderBy('created_at', 'desc')->paginate(5);
            return view('admin.product.list')
                ->with('list_obj', $obj)
                ->with('categories', $cagegories)
                ->with('categoryId', $categoryId);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.form');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $obj = new Product();
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->image = Input::get('image');
        $obj->description = Input::get('description');
        $obj->categoryId = Input::get('categoryId');
        $obj->save();
        return redirect('/admin/product');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return null;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obj = Product::find($id);
        if ($obj == null){
            return view('404');
        }
        return view('admin.product.edit')->with('obj_view', $obj);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $obj = Product::find($id);
        if ($obj == null){
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->image = Input::get('image');
        $obj->description = Input::get('description');
        $obj->categoryId = Input::get('categoryId');
        $obj->save();
        return redirect('admin/product');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obj = Product::find($id);
        if ($obj == null){
            return response()->json(['error' => 'not found'], 404);
        }
        $obj->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}