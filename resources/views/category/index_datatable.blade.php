@extends('layouts.app')
@section('content')
<div class="container">
    <!--Title category-->
    <div class="row">
        <div class="col-md-12">
            <h2 class="pull-left"><strong>CATEGORY MODEL</strong></h2>
            <a href="{!! route('categories.create') !!}" class="btn btn-primary pull-right glyphicon glyphicon-plus"></a>
        </div>
    </div>
    <div class="row" style="margin-top: 20px; margin-bottom: 100px;">
        <div class="col-md-12">
            <!--Table Category-->
            <table class="table table-hover" id='category-table'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Introduce</th>
                        <th>Image</th>
                        <th>Edit</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@stop

