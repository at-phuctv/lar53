<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Datatables;

class DatatableController extends Controller
{

    public function getData(Request $request, $type)
    {
        $method = $type . 'Data';
        return $this->$method($request);
    }

    public function categoryData()
    {
        $column = [
            'id',
            'name',
            'introduce',
            'image',
        ];
        $category = \App\Models\Category::select($column);
        return Datatables::of($category)
                ->addColumn('edit', 'category.datatable.action_edit')
                ->addColumn('remove', 'category.datatable.action_remove')
                ->make(true);
    }
}
