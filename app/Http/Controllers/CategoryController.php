<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);

        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $request = $request->all();

        $category = Category::create($request);
        if($category){
            return redirect()->route('categories.index');
        }
        
        return abort(503);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.show',['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request = $request->all();

        $category->update($request);
        if($category){
            return view('categories.edit',['category' => $category]);
        }

        return abort(503);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if(count($category->products)) {
            return redirect('categories');
        }
        $category->delete();
        return redirect()->route('categories.index');
    }
}
