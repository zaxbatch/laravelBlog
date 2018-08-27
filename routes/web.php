<?php






Route::get('/', 'PostsController@home');

Route::get('/categories', 'PostsController@categories');

Route::get('/articles', 'PostsController@articles');

Route::get('/categories/{topics}', 'PostsController@id');

Route::get('/subscribe', 'PostsController@subscribe');

Route::get('/thanks', 'PostsController@thanks');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');


