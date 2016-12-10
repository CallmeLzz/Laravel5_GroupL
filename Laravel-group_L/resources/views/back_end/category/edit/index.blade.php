@extends('back_end.masterpage')
@if(isset($cate) && isset($menu))
	@section('title', 'Admin Category Page - Update')

	@section('main-content')
	    @include('back_end.category.edit.edit_category')
	@stop

	@section('right-menu')
		@include('back_end.category.layout.right_category')
	@stop
@else
@endif
