<?php






Route::get('/', 'TopicsController@home');

Route::get('/categories', 'TopicsController@categories');

Route::get('/categories/{topics}', 'TopicsController@id');

Route::get('/subscribe', 'TopicsController@subscribe');

Route::get('/thanks', 'TopicsController@thanks');


