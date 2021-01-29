<?php

$router->group(['prefix' => 'penasehat-akademik'], function () use ($router) {
    $router->get('all', 'dosen\PenasehatAkademikController@all');
    $router->post('store', 'dosen\PenasehatAkademikController@store');
    $router->get('{id}/show', 'dosen\PenasehatAkademikController@show');
    $router->patch('{id}/update', 'dosen\PenasehatAkademikController@update');
    $router->delete('{id}/delete', 'dosen\PenasehatAkademikController@delete');
});


$router->group(['prefix' => 'bimbingan-proposal'], function () use ($router) {
    $router->get('all', 'dosen\BimbinganProposalController@all');
    $router->post('store', 'dosen\BimbinganProposalController@store');
    $router->get('{id}/show', 'dosen\BimbinganProposalController@show');
    $router->patch('{id}/update', 'dosen\BimbinganProposalController@update');
    $router->delete('{id}/delete', 'dosen\BimbinganProposalController@delete');
});

$router->group(['prefix' => 'bimbingan_skiripsi'], function () use ($router) {
    $router->get('all', 'dosen\BimbinganSkripsiController@all');
    $router->post('store', 'dosen\BimbinganSkripsiController@store');
    $router->get('{id}/show', 'dosen\BimbinganSkripsiController@show');
    $router->patch('{id}/update', 'dosen\BimbinganSkripsiController@update');
    $router->delete('{id}/delete', 'dosen\BimbinganSkripsiController@delete');
});


$router->group(['prefix' => 'matakuliah'], function () use ($router) {
    $router->get('all', 'matakuliah\matakuliahController@all');
    $router->post('store', 'matakuliah\matakuliahController@store');
    $router->get('{id}/show', 'matakuliah\matakuliahController@show');
    $router->patch('{id}/update', 'matakuliah\matakuliahController@update');
    $router->delete('{id}/delete', 'matakuliah\matakuliahController@delete');
});

$router->group(['prefix' => 'matakuliah-ajar'], function () use ($router) {
    $router->get('all', 'matakuliah\matakuliahAjarController@all');
    $router->post('store', 'matakuliah\matakuliahAjarController@store');
    $router->get('{id}/show', 'matakuliah\matakuliahAjarController@show');
    $router->patch('{id}/update', 'matakuliah\matakuliahAjarController@update');
    $router->delete('{id}/delete', 'matakuliah\matakuliahAjarController@delete');
});

