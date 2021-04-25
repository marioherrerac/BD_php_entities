<?php
  // file: routes.php

  /*

  Route::resource('professor', 'ProfessorController');

  Route::get('/professor/(:number)/delete','ProfessorController@destroy');

  Route::get('/','ProfessorController@index');
  */

  /* */
  require_once('models/Book.php');
  require_once('models/Author.php');
  require_once('models/Publisher.php');
  
  Route::resource('book', 'BookController');

  Route::get('/book/(:number)/delete','BookController@destroy');

  Route::get('/','BookController@index');

  Route::resource('author', 'AuthorController');

  Route::get('/author/(:number)/delete','AuthorController@destroy');

  Route::get('/','AuthorController@index');
  
  Route::resource('publisher', 'PublisherController');

  Route::get('/publisher/(:number)/delete','PublisherController@destroy');

  Route::get('/','PublisherController@index');
  

  Route::dispatch();
?>