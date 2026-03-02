@extends('layouts.app')

@section('title', 'Home')

@section('body-class', 'index-page')

@section('content')

@include('sections.hero')

@include('sections.homeAbout')

@include('sections.featuredDepartement')

@include('sections.featuredServices')

@include('sections.findADoctor')

@include('sections.callToAction')
        
@endsection