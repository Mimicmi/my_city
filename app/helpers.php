<?php

if (!function_exists('title_page')) {
  function title_page(?string $title = null): string {
    if ($title === null) {
      return config('app.name');
    } else { 
      return $title . ' | ' . config('app.name');
    }
  }
}