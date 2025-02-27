@extends('layouts.front')
@section('title', 'Home')
@section('content')
@include('front.rental.sections.banner')
@include('front.rental.sections.rental') {{-- Baris kode yang baru saja ditambahkan --}}
@endsection
