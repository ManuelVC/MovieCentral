<?php

Route::get('/', function () {
    return view('pages.index');
});

Route::get('movies',function(){
  return view('pages.movies.index');
});

Route::get('movies/{category}',function(){
  return view('pages.movies.category');
})->where('$category','^[a-z]+');
