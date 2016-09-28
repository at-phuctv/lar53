@extends('layouts.app')
@section('content')
<div class="container">
    <!--Title category-->
    <div class="row">
        <div class="col-md-12">
            <h2 class="pull-left"><strong>CATEGORY MODEL</strong></h2>
            <a href="{!! route('categories.create') !!}" class="btn btn-primary pull-right glyphicon glyphicon-plus"></a>
        </div>
    </div>
    <!--Form search-->
    {!! Form::open(array('route'=>array('categories.index'),'method'=>'GET')) !!} 
    <div class="row" style="margin-top: 5px;">
        <div class="col-md-4">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Search by category name..." />
        </div>
    </div>
    <div class="row" style="margin-top: 15px;">
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
    {!! Form::close() !!}
    <hr/>
    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="col-md-12">
            <!--Table Category-->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Introduce</th>
                        <th colspan="2" style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($category) === 0)
                    <tr>
                        <td style="text-align: center;" colspan="5">
                            No result on list category
                        </td>
                    </tr>
                    @else
                    @foreach($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ str_limit($item->introduce, 100) }}</td>
                        <td style="text-align: center;">
                            <a href="{!! route('categories.edit', $item->id) !!}" class="glyphicon glyphicon-edit"> Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;
                            {!! Form::open(array('route'=>array('categories.destroy',$item->id),'method'=>'DELETE','style'=>'display: inline', 'class' =>'form-delete')) !!}    
                            <button class="btn btn-link"> <i class="glyphicon glyphicon-remove"> Remove</i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                <tfoot>
                <td colspan="5" style="text-align: right;">{{ $category->appends(Request::all())->links() }}</td>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@stop

