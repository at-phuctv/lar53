@extends('layouts.app')
@section('content')
<div class="container">
    <!--Name-->
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $category->name }}</h2>
        </div>
    </div>
    <!--Introduce-->
    <div class="row">
        <div class="col-md-12">
            <article>{!! $category->introduce !!}</article>
        </div>
    </div>
</div>
@stop

