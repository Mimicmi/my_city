@extends('app')

@section('title')

@section('content')
    <img src="/images/lyon.jpg" alt="photo lyon" height="50%" width="50%">
    <h1>Hello from Lyon !</h1>
    <p>It's {{ date('h:i A') }} in Lyon !</p>
@endsection