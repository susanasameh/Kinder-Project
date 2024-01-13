@extends('layouts.pages')

@push('headerTitle')
About Us
@endpush


@section('content')

@include('includes.about')

@include('includes.callToAction')

@include('includes.team')


@endsection
