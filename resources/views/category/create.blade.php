@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h2><strong>CREATE CATEGORY</strong></h2>
    </div>
    <!--Show validate-->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {!! Form::open(['route' => 'categories.store', 'class' => 'form-horizontal', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <label>Name</label>
            <input type="text" class="form-control" name="name" />
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <label>Introduce</label>
            <textarea class="form-control" cols="10" rows="6" name="introduce"></textarea>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <label>Image</label>
            <input type="file"  name="image" />
        </div>
    </div>
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-md-6">
            <button type="submit" name="ok" class="btn btn-primary">Create</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
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