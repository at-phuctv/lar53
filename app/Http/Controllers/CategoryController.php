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
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
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
        $data = $this->category->select($select);
        if (isset($input)) {
            $category = $data->where('name', 'LIKE', '%' . $input . '%');
        }
        $category = $data->orderBy('id', 'DESC')->paginate(10);
        return view('category.index', ['category' => $category, 'type' =>'category']);
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
        $this->category->create($input);
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
        $category = $this->category->findOrFail($id);
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
        $category = $this->category->findOrFail($id);
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
        $category = $this->category->findOrFail($id);
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['image'] = $this->category->upload($image);
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
        $category = $this->category->findOrFail($id);
        $category->delete($category);
        flash('Delete category successful!', 'success');
        return redirect()->route('categories.index');
    }
    
    // get index datatabel
    public function indexDatatable()
    {
        return view('category.index_datatable');
    }
}
