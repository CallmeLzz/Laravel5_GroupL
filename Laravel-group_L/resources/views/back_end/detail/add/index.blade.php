@extends('back_end.masterpage')
@if(isset($menu))
	@section('title', 'Admin Detail Page - Add')

	@section('main-content')
	    @include('back_end.detail.add.add_detail')
	@stop

	@section('right-menu')
		@include('back_end.detail.layout.right_detail')
	@stop
@elseif(isset($cate))
	@section('title', 'Admin Detail Page - Add Price')

	@section('main-content')
	    @include('back_end.detail.add.add_price')
	@stop
@endif