<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<h1>Главная страница</h1>
@endsection
@section('footerScripts')
@parent
<script src="dashboard.js"></script>
@endsection