@extends('app')

@section('title', 'About me | ' . config('app.name'))

@section('content')
  <p>Built with Laravel8 &hearts; by Simon F. checkout my <a href="https://github.com/Mimicmi" target="_blank">github</a> !</p>
<p><a href="{{ route('home') }}">Return to homepage</a></p>
@endsection