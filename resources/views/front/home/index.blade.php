@extends('layouts.front')
@section('title', 'Home')
@section('content')
@include('front.home.sections.hero')
@include('front.home.sections.feature')
@include('front.home.sections.top')
@include('front.home.sections.about')
@include('front.home.sections.ride')
@include('front.home.sections.category')
@include('front.home.sections.brand')
@include('front.home.sections.testimoni')
@include('front.home.sections.blog')
@include('front.home.sections.bookform') {{-- Baris kode yang baru saja ditambahkan --}}
@endsection
