@extends('layouts.app')
@section('content')
<div class="container">
    {!! $dataTable->table() !!}
</div>
@stop
@section('script')
<script src="{!! asset('/vendor/datatables/buttons.server-side.js')!!}"></script>
{!! $dataTable->scripts() !!}
@stop