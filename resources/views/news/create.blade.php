@extends('layouts.app')
@section('content')
<div class="container">
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
    {!! Form::open(['route' => 'news.store', 'class' => 'basic-grey', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
    <h1>Create News 
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <p>Choose Category</p>
    <label>
        <select name="cate_id">
            @foreach($categories as $key => $value)
            <option value="{!! $key !!}">{{ $value }}</option>
            @endforeach()
        </select>
    </label>
    <p>Author</p>
    <label>
        <input id="author" type="text" name="author" placeholder="Enter Author" />
    </label>
    <p>Image</p>
    <label>
        <input id="image" type="file"  name="image" />
    </label>
    <p>Title</p>
    <label>
        <input id="author" type="text" name="title" placeholder="Enter Title" />
    </label>
    <p>Introduce</p>
    <label>
        <textarea id="introduce" name="introduce" placeholder="Enter introduce news"></textarea>
    </label> 
    <p>Content</p>
    <label>
        <textarea id="content" name="content" placeholder="Enter introduce category"></textarea>
    </label> 
    <p> <input type="submit" class="button" value="Create" /> </p>
    {!! Form::close() !!}
</div>
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