@extends('layouts.app')
@section('content')
<div class="container">
    <!--Title category-->
    <div class="row">
        <div class="col-md-12">
            <h2 class="pull-left"><strong>CATEGORY MODEL</strong></h2>
            <a href="{!! route('news.create') !!}" class="btn btn-primary pull-right glyphicon glyphicon-plus"></a>
        </div>
    </div>
    <!--Form search-->
    <!--    {!! Form::open(array('route'=>array('news.index'),'method'=>'GET')) !!}
        <div class="row">
            <div class="col-md-12">
                <h4>Name</h4>
                <div id="custom-search-input">
                    <div class="input-group col-md-4">
                        <input type="text" name="name" class="  search-query form-control" placeholder="Enter category by name" />
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit">
                            <span class=" glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}-->
    <hr/>
    {!! Form::open(array('route'=>array('getCsv',$type),'method'=>'GET')) !!}
    <p> <input type="submit" class="btn btn-info" value="Download CSV" /> </p>
    {!! Form::close() !!}
    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="col-md-12">
            <!--Table Category-->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Introduce</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th colspan="2" style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href ="{!! route('news.show', $item->id) !!}">{{ str_limit($item->author, 20) }}</a></td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ str_limit($item->introduce, 20) }}</td>
                        <td>{{ str_limit($item->content, 20) }}</td>
                        <td style="text-align: center;"><img src="{!! asset('/uploads/'.$item->image) !!}" width="100px;" class="img-thumbnail" /></td>
                        <td style="text-align: center;">
                            <a href="{!! route('news.edit', $item->id) !!}" class="glyphicon glyphicon-edit"> Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;
                            {!! Form::open(array('route'=>array('news.destroy',$item->id),'method'=>'DELETE','style'=>'display: inline', 'class' =>'form-delete')) !!}
                            <button class="btn btn-link"> <i class="glyphicon glyphicon-remove"> Remove</i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <td colspan="7" style="text-align: right;">{{ $news->appends(Request::all())->links() }}</td>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@stop