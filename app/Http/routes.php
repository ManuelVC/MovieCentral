<?php

Route::get('/', function () {
    return view('pages.index');
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
