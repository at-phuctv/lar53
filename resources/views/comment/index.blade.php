@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manager comment
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List comment</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List comment</h3>
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
                                    <th>News Title</th>
                                    <th>Author</th>
                                    <th>Content</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comment as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href ="{!! route('news.show', $item->news_id) !!}">{{ str_limit($item->news->title, 20) }}</a></td>
                                    <td>{{ str_limit($item->author, 20) }}</td>
                                    <td>{{ str_limit($item->content, 50) }}</td>
                                    <td>{{ $item->date }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginations pull-right"> {{ $comment->appends(Request::all())->links() }} </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop