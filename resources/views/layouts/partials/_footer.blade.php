<footer class="flex flex-col justify-between">
  <p class="text-gray-400">&copy; Copyright {{ date('Y') }} 
       
    @if(!Route::is('about'))
    &middot; <a href="{{ route('about') }}" class="text-indigo-600 underline hover:text-indigo-900">About me</a> 
    @endif
  </p>
</footer>