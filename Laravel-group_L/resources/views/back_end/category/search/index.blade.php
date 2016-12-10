@extends('back_end.masterpage')
@section('title', 'Search Menu Page')

@section('main-content')
    @include('back_end.category.search.content')
@stop

@section('right-menu')
	@include('back_end.category.layout.right_category')
@stop