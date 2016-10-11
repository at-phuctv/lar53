@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manager News
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List news</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List news</h3>
                        <a href="{!! route('news.create') !!}">
                            <button type="button" class="btn btn-floating btn-primary btn-sm pull-right"><i class="icon wb-plus" aria-hidden="true"></i></button>
                        </a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        @include('flash::message')
                        {!! Form::open(array('route'=>array('getCsv',$type),'method'=>'GET')) !!}
                        <p> <input type="submit" class="btn btn-info" value="Download CSV" /> </p>
                        {!! Form::close() !!}
                        <table id="dataTables-users" class="table table-bordered dataTable table-striped"
                               data-plugin="dataTable">
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
                                    <td><a href ="{!! route('news.show', $item->id) !!}">{{ str_limit($item->author, 10) }}</a></td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ str_limit($item->introduce, 10) }}</td>
                                    <td>{{ str_limit($item->content, 10) }}</td>
                                    <td style="text-align: center;"><img src="{!! asset('/uploads/'.$item->image) !!}" width="100px;" class="img-thumbnail" /></td>
                                    <td style="text-align: center;">
                                        <a href="{!! route('news.edit', $item->id) !!}" class="glyphicon glyphicon-edit"> Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;
                                        {!! Form::open(array('route'=>array('news.destroy',$item->id),'method'=>'DELETE','style'=>'display: inline', 'class' =>'form-delete')) !!}
                                        <button class="btn btn-link"> <i class="glyphicon glyphicon-remove"> Remove</i></button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        <div class="paginations pull-right"> {{ $news->appends(Request::all())->links() }} </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop