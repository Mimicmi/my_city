@extends('app')

@section('title')

@section('content')
    <h1>Hello from Lyon !</h1>
    <p>It's {{ date('h:i A') }} in Lyon !</p>

    {{ env('APP_NAME') }}
@endsection