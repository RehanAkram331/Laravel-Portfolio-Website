@extends('Layout.app')
@section('title','Home')




@section('content')

@include('Component.HomeBanner')
@include('Component.HomeService')

@include('Component.HomeCourch')
@include('Component.HomeProject')
@include('Component.HomeContactUS')
@include('Component.HomeReview')

@endsection
