@extends('back_end.masterpage')
@if(isset($searchPrice))
	@section('title', 'Search Price Page')

	@section('main-content')
	    @include('back_end.detail.search.content_price')
	@stop

	@section('right-menu')
		@include('back_end.detail.layout.right_price')
	@stop
@elseif(isset($searchDetail))
	@section('title', 'Search Detail Page')

	@section('main-content')
	    @include('back_end.detail.search.content_detail')
	@stop

	@section('right-menu')
		@include('back_end.detail.layout.right_detail')
	@stop
@endif