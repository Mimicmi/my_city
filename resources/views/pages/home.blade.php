@extends('app')

@section('content')

    <h1>Hello from Lyon !</h1>
    <p>It's 'insert time from function' {{ date('h:i A') }} in Lyon !</p>

@endsection