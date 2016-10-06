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
    {!! Form::open(['route' => ['news.update',$news->id], 'class' => 'basic-grey', 'method' => 'PUT' , 'enctype' => 'multipart/form-data']) !!}
    <h1>Update News</h1>
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