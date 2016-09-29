<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\SearchCategoryRequest;
use App\Http\Requests;
use DB;
use App\Models\Category;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $input = $request->get('name');
        $select = [
            'id',
            'name',
            'introduce',
            'image'
        ];
        $data = Category::select($select);
        if (isset($input)) {
            $category = $data->where('name', 'LIKE', '%' . $input . '%');
        }
        $category = $data->orderBy('id', 'DESC')->paginate(10);
        return view('category.index', ['category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['image'] = Category::upload($image);
        }
        Category::create($input);
        flash('Create category successful!', 'success');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['image'] = Category::upload($image);
        }
        $category->update($input);
        flash('Update category successful!', 'success');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete($category);
        flash('Delete category successful!', 'success');
        return redirect()->route('categories.index');
    }
    
    public function indexDatatable()
    {
        return view('category.index_datatable');
    }
}
