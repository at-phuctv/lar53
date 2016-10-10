@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>News</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('news.index') !!}">List news</a></li>
            <li class="active">Create News</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info" id="custom">
            <div class="box-header with-border">
                <h3 class="box-title">Add News</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @include('flash::message')
            {!! Form::open(['route' => ['news.update',$news->id], 'class' => 'basic-grey', 'method' => 'PUT' , 'enctype' => 'multipart/form-data']) !!}
            <p>Choose Category</p>
            <label>
                <select name="cate_id">
                    @foreach($categories as $key => $value)
                    @if (old('id', $news->category->id) == $key)
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                    @else
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endif
                    @endforeach()
                </select>
            </label>
            <p>Author</p>
            <label>
                <input  value="{{ old('author', isset($news->author) ? $news->author : null) }}" id="author" type="text" name="author" placeholder="Enter Author" />
            </label>
            <p>Image old</p>
            <label>
                <img id="image" src="{!! asset('/uploads/'.$news->image) !!}" width="100px" class="img-responsive" />
            </label>
            <p>Image news</p>
            <label>
                <input id="image" type="file"  name="image" />
            </label>
            <p>Title</p>
            <label>
                <input value="{{ old('title',  isset($news->title) ? $news->title : null) }}" id="author" type="text" name="title" placeholder="Enter Title" />
            </label>
            <p>Introduce</p>
            <label>
                <textarea id="introduce" name="introduce" placeholder="Enter introduce news">{{ old('introduce',  isset($news->introduce) ? $news->introduce : null) }}</textarea>
            </label> 
            <p>Content</p>
            <label>
                <textarea id="content" name="content" placeholder="Enter introduce category">{{ old('content',  isset($news->content) ? $news->content : null) }}</textarea>
            </label> 
            <p> <input type="submit" class="button" value="Update" /> </p>
            {!! Form::close() !!}
        </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop
@section('script')
<script>
    CKEDITOR.replace('content',
            {
                filebrowserBrowseUrl: '{!! asset("/ckfinder/ckfinder.html")!!}',
                filebrowserImageBrowseUrl: '{!! asset("/ckfinder/ckfinder.html?type=Images")!!}',
                filebrowserFlashBrowseUrl: '{!! asset("/ckfinder/ckfinder.html?type=Flash")!!}',
                filebrowserUploadUrl: '{!! asset("/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")!!}',
                filebrowserImageUploadUrl: '{!! asset("/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")!!}',
                filebrowserFlashUploadUrl: '{!! asset("/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")!!}',
            });
</script>
@stop
