@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h2><strong>EDIT CATEGORY</strong></h2>
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
    <!--Form edit category-->
    {!! Form::open(array('route'=>array('categories.update',$category->id),'method'=>'PUT','enctype' => 'multipart/form-data')) !!}  
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name',  isset($category->name) ? $category->name : null) }}" />
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <label>Introduce</label>
            <textarea class="form-control" cols="10" rows="6" name="introduce">{{ old('introduce',  isset($category->introduce) ? $category->introduce : null) }}</textarea>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <label>Image old</label>
            <img src="{!! asset('/uploads/'.$category->image) !!}" width="100px" class="img-responsive" />
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <label>Image news</label>
            <input type="file"  name="image" />
        </div>
    </div>
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@stop
@section('script')
<script src="{!! asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')!!}"></script>
<script src="{!! asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')!!}"></script>
<script>
$('textarea').ckeditor();
</script>
@stop
