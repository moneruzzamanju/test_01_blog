<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
// Option-01
       $data['categories'] = Category::all();
        return view('backend.category.index',$data);

// Option-02
//        $categories = Category::all();
//        return view('backend.category.index',['categories'=>$categories]);

// Option-03
//        $categories = Category::all();
//        return view('backend.category.index',compact('categories'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
//        $data['name'] = $request->name;
//        $data['description'] = $request->description;

    $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
    ],[
        'name.required'=> "Name must be filled up.",
        'description.required'=>" Description field must be required."
    ]);

        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
// Option-01
//        $data['category']= $category;
//        return view('backend.category.show',$data);

        // Option-02
//        return view('backend.category.show',['category'=>$category]);

        // Option-03
        return view('backend.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // Option-01
    //    $data['category']= $category;
    //    return view('backend.category.edit',$data);

        // Option-02
    //    return view('backend.category.edit',['category'=>$category]);

        // Option-03
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //        dd($request->all());

        // Option-01
       $data['name'] = $request->name;
       $data['description'] = $request->description;
       $category->update($data);
       return redirect()->route('categories.index');
       
       // Option-02
        // Category::where('id',$category->id)->update([
        //     'name'=>$request->name,
        //     'description'=>$request->description,
        // ]);
        // return redirect()->route('categories.index');

        // Option-03
    //    $category->update($request->all());
    //    return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
