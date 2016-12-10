@extends('back_end.masterpage')
@section('title', 'Search Menu Page')

@section('main-content')
    @include('back_end.detail.search.content')
@stop

@section('right-menu')
	@include('back_end.detail.layout.right_detail')
@stop