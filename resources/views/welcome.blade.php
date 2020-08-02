@extends('layouts.main_layouts')

@section('title','MercaTodo')

@section('contenido')
@include('layouts.main_partials.main_carousel')
@include('layouts.main_partials.categorias')
@include('layouts.main_partials.trending_cart')

@endsection