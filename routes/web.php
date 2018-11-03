<?php

Route::get('/',[
	'as'	=>	'index',
	'uses'	=>	'personals@index'
]);

Route::resource('obreros','personals');



