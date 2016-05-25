<?php

Route::get('/', function () {
    return view('pages.index');
});

Route::get('movies',function(){
  return view('pages.movies.index');
});
