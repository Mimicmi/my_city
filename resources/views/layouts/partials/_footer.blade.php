<footer class="flex flex-col justify-between content-center">
  <p class="text-gray-400">&copy; Copyright {{ date('Y') }} 

    @if(!Route::is('about'))
      &middot; <a href="{{ route('about') }}" class="text-indigo-600 underline hover:text-indigo-900">About me</a> 
    @endif
    
    <br>
    <a href="{{ route('help') }}" class="text-indigo-600 underline hover:text-indigo-900">Need help?</a>

  </p>
</footer>