<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
Главная страница
@endsection
@section('footerScripts')
@parent
<script src="dashboard.js"></script>
@endsection