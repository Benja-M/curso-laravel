<?php

Route::get('/', 'PageController@inicio')->name('inicio');

Route::get('/detalle{id}', 'PageController@detalle')->name('notas.detalle');

Route::post('/', 'PageController@crear')->name('notas.crear');

Route::get('/editar/{id}','PageController@editar')->name('notas.editar');

Route::get('fotos', 'PageController@fotos')->name('foto');

Route::get('noticias', 'PageController@noticias')->name('noticias');

Route::get('nosotros/{nombre?}','PageController@nosotros')->name('nosotros');
