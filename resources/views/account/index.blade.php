@extends('layouts.account')

@section('title')
    Account Management
@endsection

@section('content')

    <p>Welcome back, {{ Auth::user()->name_first . ' ' . Auth::user()->name_last; }}.</p>
    <p>Your UUID is: {{ Auth::user()->id }}</p>

@endsection