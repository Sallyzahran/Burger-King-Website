<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.categories.index' ,compact('categories'));
    }


    public function create()
    {

        $parents = Category::all();
        return view('admin.categories.create',compact('parents'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
          'name' =>['required', 'string' ,' between:3,100'],
          'parent_id' =>['nullable', 'int' ,'exists:categories,id'],
          'description' =>['nullable', 'string'],
            ],

            [

              'name.required' => 'You Should Gave a Name For The Category',
              'name.between' => 'The Name Should Be Between 3 : 100 Characters',
            ],


    );//End Validate

    $category = new Category ();
    $category->name = $request->name;
    $category->slug = Str::slug($request->name);
    $category->description = $request->description;
    $category->parent_id = $request->parent_id;

    $category->save();

    return redirect()->route('categories.index')->with('success','Category Added Successfully');





    }


    public function show(Category $category)
    {
        //
    }


    public function edit(Category $category)
    {
        //
    }


    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success','Category Deleted Successfully');

    }
}
