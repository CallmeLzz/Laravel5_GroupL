@extends('back_end.masterpage')
@section('title', 'Admin Detail Page - Add')

@section('main-content')
    @include('back_end.detail.add.add_detail')
@stop

@section('right-menu')
	@include('back_end.detail.layout.right_detail')
@stop