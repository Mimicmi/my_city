@extends('app')

@section('title', 'About me | ' . config('app.name'))

@section('content')

  <img class="w-32 h-32 rounded-full"
src="{{ asset('/images/profil_simon.jpg') }}" alt="image profil">
  <p>Built with Laravel8 <span class="text-pink-500">&hearts;</span> by Simon F. checkout my <a href="https://github.com/Mimicmi" class="text-indigo-600 underline hover:text-indigo-900" target="_blank">github</a> !</p>
  <p><a href="{{ route('home') }}" class="text-indigo-600 underline hover:text-indigo-900">Return to homepage</a></p>
@endsection