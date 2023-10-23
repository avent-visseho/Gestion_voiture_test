@extends('layouts.app')

@section('title', "welcome to Gestion_voiture")

@section('header')
    @include('includes.header')
@endsection

@section('infoMain')
    @include('includes.categorieForm')
@endsection

@section('sideBar')
    @include('includes.sideBar', ['categories' => $categories])
@endsection