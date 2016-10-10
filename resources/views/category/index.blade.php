@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manager category
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List category</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List category</h3>
                        <a href="{!! route('categories.create') !!}">
                            <button type="button" class="btn btn-floating btn-primary btn-sm pull-right"><i class="icon wb-plus" aria-hidden="true"></i></button>
                        </a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        @include('flash::message')

                        <table id="dataTables-users" class="table table-bordered dataTable table-striped"
                               data-plugin="dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Introduce</th>
                                    <th>Image</th>
                                    <th colspan="2" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($category) === 0)
                                <tr>
                                    <td style="text-align: center;" colspan="6">
                                        No result on list category
                                    </td>
                                </tr>
                                @else
                                @foreach($category as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href ="{!! route('categories.show', $item->id) !!}">{{ str_limit($item->name, 20) }}</a></td>
                                    <td>{{ str_limit($item->introduce, 50) }}</td>
                                    <td style="text-align: center;"><img src="{!! asset('/uploads/'.$item->image) !!}" width="50px;" class="img-thumbnail" /></td>
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
                        </table>
                        <div class="paginations"> {{ $category->appends(Request::all())->links() }} </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop