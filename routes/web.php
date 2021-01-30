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
    $router->get('all', 'matakuliah\MatakuliahController@all');
    $router->post('store', 'matakuliah\MatakuliahController@store');
    $router->get('{id}/show', 'matakuliah\MatakuliahController@show');
    $router->patch('{id}/update', 'matakuliah\MatakuliahController@update');
    $router->delete('{id}/delete', 'matakuliah\MatakuliahController@delete');
});

$router->group(['prefix' => 'matakuliah-ajar'], function () use ($router) {
    $router->get('all', 'matakuliah\MatakuliahAjarController@all');
    $router->post('store', 'matakuliah\MatakuliahAjarController@store');
    $router->get('{id}/show', 'matakuliah\MatakuliahAjarController@show');
    $router->patch('{id}/update', 'matakuliah\MatakuliahAjarController@update');
    $router->delete('{id}/delete', 'matakuliah\MatakuliahAjarController@delete');
});

