<?php

Route::get('/', function() {
	return 'HOLA';
});

Route::get('/saludo', function() {
	return 'saludo';
});

Route::get('/broma/{nombre}/{apodo?}', function($nombre, $apodo) {
	if ($apodo) {
		return "hola {$nombre} tu apodo es {$apodo}";
	}else{
		return "hola {$nombre} no tiene apodo";
	}
});