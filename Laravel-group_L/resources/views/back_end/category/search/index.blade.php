@extends('back_end.masterpage')
@if(isset($searchCategory))
	@section('title', 'Search Category Page')

	@section('main-content')
	    @include('back_end.category.search.content_category')
	@stop

	@section('right-menu')
		@include('back_end.category.layout.right_category')
	@stop
@endif