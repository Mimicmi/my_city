@extends('app')

@section('title')

@section('content')
  <div class="border border-light-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
    <img class="object-none h-48 w-full"
  src="{{ asset('/images/lyon.jpg') }}" alt="photo lyon">
  </div>
  <h1>Hello from Lyon !</h1>
  <p>It's {{ date('h:i A') }} in Lyon !</p>
@endsection