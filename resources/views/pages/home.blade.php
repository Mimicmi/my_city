@extends('app')

@section('title', 'Hi my city!')

@section('content')
    <h1>Hello from Lyon !</h1>
    <p>It's {{ date('h:i A') }} in Lyon !</p>
@endsection