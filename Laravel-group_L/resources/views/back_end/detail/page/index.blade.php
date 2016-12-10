@extends('back_end.masterpage')
@if(isset($detail))
	@section('title', 'Admin Detail Page')

	@section('main-content')
	    @include('back_end.detail.page.content_detail')
	@stop

	@section('right-menu')
		@include('back_end.detail.layout.right_detail')
	@stop
@else
@endif