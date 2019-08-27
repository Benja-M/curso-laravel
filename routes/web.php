<?php

Route::get('/', 'PageController@inicio')->name('inicio');

Route::get('/detalle{id}', 'PageController@detalle')->name('notas.detalle');

Route::post('/', 'PageController@crear')->name('notas.crear');

Route::put('/editar/{id}','PageController@update')->name('notas.update');

Route::get('/editar/{id}','PageController@editar')->name('notas.editar');

Route::delete('eliminar/{id}', 'PageController@eliminar')->name('notas.eliminar');

Route::get('fotos', 'PageController@fotos')->name('foto');

Route::get('noticias', 'PageController@noticias')->name('noticias');

Route::get('nosotros/{nombre?}','PageController@nosotros')->name('nosotros');
 