@extends('back_end.masterpage')
@if(isset($cate))
	@section('title', 'Admin Category Page')

	@section('main-content')
	    @include('back_end.category.page.content_category')
	@stop

	@section('right-menu')
		@include('back_end.category.layout.right_category')
	@stop
@elseif(isset($reservation))
	@section('title', 'Admin Category Reservation Page')

	@section('main-content')
	    @include('back_end.category.page.content_reservation')
	@stop
@endif