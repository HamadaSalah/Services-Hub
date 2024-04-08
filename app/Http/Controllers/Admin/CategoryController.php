<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Job::all();
        return view('Admin.Category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vlidation = $request->validate([
            'name' => 'required',
            'job_name' => 'required',
            'img' => 'required',
        ]);
        $requestData = $request->except('_token');
 
        
        Job::create($requestData);
        return redirect()->route('admin.category.index')->with('success', 'Category Addedd Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Job::findOrFail($id);
        return view('Admin.Category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vlidation = $request->validate([
            'name' => 'required',
        ]);
        $requestData = $request->except('_token');
 
        $category = Job::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'img' =>  $requestData['img'] ?? $category->img
        ]);
        return redirect()->route('category.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Job::findOrFail($id);
        $slider->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category Deleted Successfully');
    }
}
