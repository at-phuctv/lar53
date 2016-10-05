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
    <!--Form edit category-->
    {!! Form::open(array('route'=>array('categories.update',$category->id),'method'=>'PUT','enctype' => 'multipart/form-data', 'class' => 'basic-grey')) !!}  
    <h1>Update Category</h1>
    <p>Name</p>
    <label>
        <input id="name" type="text" name="name" value="{{ old('name',  isset($category->name) ? $category->name : null) }}" placeholder="Category name" />
    </label>
    <p>Image old</p>
    <label>
        <img id="image" src="{!! asset('/uploads/'.$category->image) !!}" width="100px" class="img-responsive" />
    </label>
    <p>Image news</p>
    <label>
        <input id="image" type="file"  name="image" />
    </label>
    <p>Introduce</p>
    <label>
        <textarea id="introduce" name="introduce" placeholder="Enter introduce category">{{ old('introduce',  isset($category->introduce) ? $category->introduce : null) }}</textarea>
    </label> 
    <p> <input type="submit" class="button" value="Update" /> </p>
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
