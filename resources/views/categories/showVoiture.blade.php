@extends('layouts.app')

@section('title', "welcome to Gestion_voiture")

@section('header')
    @include('includes.header')
@endsection

@section('infoMain')
    @include('categories.VoitureMore')
@endsection

@section('sideBar')
    @include('includes.sideBar')
@endsection