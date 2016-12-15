@extends('back_end.masterpage')
@if(isset($detail))
	@section('title', 'Admin Detail Page - Update')

	@section('main-content')
	    @include('back_end.detail.edit.edit_detail')
	@stop

	@section('right-menu')
		@include('back_end.detail.layout.right_detail')
	@stop
@elseif(isset($price))
	@section('title', 'Admin Detail Page - Update Price')

	@section('main-content')
	    @include('back_end.detail.edit.edit_price')
	@stop
@endif