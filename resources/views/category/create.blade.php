@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Category</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('categories.index') !!}">List category</a></li>
            <li class="active">Add Category</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info" id="custom">
            <div class="box-header with-border">
                <h3 class="box-title">Add category</h3>
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
            {!! Form::open(array('route'=>array('categories.store'),'method'=>'POST','enctype' => 'multipart/form-data', 'class' => 'basic-grey')) !!}  
            <p>Name</p>
            <label>
                <input id="name" value="{{ old('name') }}" type="text" name="name"  placeholder="Category name" />
            </label>
            <p>Image</p>
            <label>
                <input id="image" type="file"  name="image" />
            </label>
            <p>Introduce</p>
            <label>
                <textarea id="introduce" name="introduce" placeholder="Enter introduce category">{{ old('introduce') }}</textarea>
            </label> 
            <p> <input type="submit" class="button" value="Add" /> </p>
            {!! Form::close() !!}
        </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop
@section('script')
<script>
    CKEDITOR.replace('introduce',
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
