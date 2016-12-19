@extends('front_end.masterpage')

@section('title', 'Home')

@section('content')
@include('front_end.home.partial.banner')
@include('front_end.home.partial.reservation')
@include('front_end.home.partial.content_0')
@include('front_end.home.partial.content_1')
@stop