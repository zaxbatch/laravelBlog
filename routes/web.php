<?php






Route::get('/', 'PostsController@index');

//Route::get('/categories', 'PostsController@categories');

//Route::get('/confirm', 'PostsController@confirm');

Route::get('/articles', 'PostsController@articles');

//Route::get('/articles/{topics}', 'PostsController@id');

//Route::get('/subscribe', 'PostsController@subscribe');

//Route::get('/thanks', 'PostsController@thanks');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

// Route::post('/comments', 'PostsController@store2');

Route::get('/posts/{post}', 'PostsController@show');


