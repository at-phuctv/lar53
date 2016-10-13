@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Category</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('categories.index') !!}">List category</a></li>
            <li class="active">Detail Category</li>
        </ol>
    </section>
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info" id="custom">
            <div class="box-header with-border">
                <h3 class="box-title">Detail category</h3>
            </div><!-- /.box-header -->
            <!--Name-->
            <div class="row" style="padding-left: 10px;">
                <div class="col-md-12">
                    <h2>{{ $category->name }}</h2>
                </div>
            </div>
            <!--Introduce-->
            <div class="row" style="padding-left: 10px;">
                <div class="col-md-12">
                    <article>{!! $category->introduce !!}</article>
                </div>
            </div>
    </section>
</div>
@stop

