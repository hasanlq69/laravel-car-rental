@extends('layouts.front')
@section('title', 'Home')
@section('content')
@include('front.about.sections.banner')
@include('front.about.sections.title')
@include('front.about.sections.vehicle')
@include('front.about.sections.category')
@include('front.about.sections.brand')
@include('front.about.sections.choseus') {{-- Baris kode yang baru saja ditambahkan --}}
@endsection
