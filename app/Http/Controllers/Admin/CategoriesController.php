<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }
    public function store(Request $request){
       $newCategory = new Category();

       $newCategory->name = $request->name;
       $newCategory->save();

       return redirect()->back();
    }
    public function update(Request $request, $categoryId){
        // dd($request->all());
       $category = Category::find($categoryId);

       $category->name = $request->name;
       $category->save();

       return redirect()->back();
    }
    public function delete(Request $request, $categoryId){
        // dd($request->all());
        // dd($categoryId);
       $category = Category::find($categoryId);
       $category->delete();

       return redirect()->back();
    }
}
