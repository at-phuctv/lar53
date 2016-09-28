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
<script src="{!! asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')!!}"></script>
<script src="{!! asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')!!}"></script>
<script>
$('textarea').ckeditor();
</script>
@stop