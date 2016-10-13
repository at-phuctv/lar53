@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>News</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('news.index') !!}">List news</a></li>
            <li class="active">Detail Category</li>
        </ol>
    </section>
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info" id="custom">
            <div class="box-header with-border">
                <h3 class="box-title">Detail News</h3>
            </div><!-- /.box-header -->
            <!--Name-->
            <div class="row" style="padding-left: 10px;">
                <div class="col-md-12">
                    <h2>{{ $news->author }}</h2>
                </div>
            </div>
            <!--Title-->
            <div class="row" style="padding-left: 10px;">
                <div class="col-md-12">
                    <h2>{{ $news->title }}</h2>
                </div>
            </div>
            <!--Introduce-->
            <div class="row" style="padding-left: 10px;">
                <div class="col-md-12">
                    <article>{!! $news->introduce !!}</article>
                </div>
            </div>
            <!--Content-->
            <div class="row" style="padding-left: 10px;">
                <div class="col-md-12">
                    <article>{!! $news->content !!}</article>
                </div>
            </div>
    </section>
</div>
@stop

