@extends('adminlte::page')
@section('title','Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Welcome {{Auth::user()->name}}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit veniam facere itaque laboriosam error officiis voluptatum, quam laudantium impedit enim minus dolore eaque quod iste aut id qui, in ipsum?</p>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>console.log('Hi!');</script>
@stop

