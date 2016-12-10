@extends('back_end.masterpage')
@if(isset($menu))
	@section('title', 'Admin Category Page - Add')

	@section('main-content')
	    @include('back_end.category.add.add_category')
	@stop

	@section('right-menu')
		@include('back_end.category.layout.right_category')
	@stop
@else
@endif