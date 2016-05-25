<?php

Route::get('/', function () {
    return view('pages.index');
});

Route::get('movies',function(){
  return view('pages.movies.index');
});

Route::get('movies/{category}',function(){
  return view('pages.movies.category');
})->where('category','^[a-z]+');

Route::get('movies/{id}',function(){
  return view('pages.movies.show');
})->where('id','^[0-9]+');


/* Area del Usuario  */
Route::get('profile',function(){
  return view('pages.users.profile');
});

Route::get('account',function(){
  return view('pages.users.account');
});

Route::get('reset',function(){
  return view('pages.users.reset');
});

Route::get('reset/change',function(){
  return view('pages.users.change');
});
/* Termina el area del usuario */

/* Area de errores */
Route::get('error/404',function(){
  return view('errors.404');
});
