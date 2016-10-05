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
    {!! Form::open(['route' => 'categories.store', 'class' => 'basic-grey', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
    <h1>Create Category 
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <p>Name</p>
    <label>
        <input id="name" type="text" name="name" placeholder="Category name" />
    </label>
    <p>Image</p>
    <label>
        <input id="image" type="file"  name="image" />
    </label>
    <p>Introduce</p>
    <label>
        <textarea id="introduce" name="introduce" placeholder="Enter introduce category"></textarea>
    </label> 
    <p> <input type="submit" class="button" value="Create" /> </p>
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