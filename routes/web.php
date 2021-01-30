<?php

$router->get('/', 'HomeController@index');

$router->group(['prefix' => 'yayasan'], function () use ($router) {

    $router->get('all', 'yayasan\YayasanController@all');
    $router->post('store', 'yayasan\YayasanController@store');
    $router->get('{id}/show', 'yayasan\YayasanController@show');
    $router->patch('{id}/update', 'yayasan\YayasanController@update');
    $router->delete('{id}/delete', 'yayasan\YayasanController@delete');
    
    $router->group(['prefix' => 'berkas'], function () use ($router) {
        $router->get('all', 'yayasan\BerkasYayasanController@all');
        $router->post('store', 'yayasan\BerkasYayasanController@store');
        $router->get('{id}/show', 'yayasan\BerkasYayasanController@show');
        $router->patch('{id}/update', 'yayasan\BerkasYayasanController@update');
        $router->delete('{id}/delete', 'yayasan\BerkasYayasanController@delete');
    });
});

$router->group(['prefix' => 'perguruan-tinggi'], function () use ($router) {

    $router->get('all', 'perguruan_tinggi\PerguruanTinggiController@all');
    $router->post('store', 'perguruan_tinggi\PerguruanTinggiController@store');
    $router->get('{id}/show', 'perguruan_tinggi\PerguruanTinggiController@show');
    $router->patch('{id}/update', 'perguruan_tinggi\PerguruanTinggiController@update');
    $router->delete('{id}/delete', 'perguruan_tinggi\PerguruanTinggiController@delete');
    
    $router->group(['prefix' => 'berkas'], function () use ($router) {
        $router->get('all', 'perguruan_tinggi\BerkasPerguruanTinggiController@all');
        $router->post('store', 'perguruan_tinggi\BerkasPerguruanTinggiController@store');
        $router->get('{id}/show', 'perguruan_tinggi\BerkasPerguruanTinggiController@show');
        $router->patch('{id}/update', 'perguruan_tinggi\BerkasPerguruanTinggiController@update');
        $router->delete('{id}/delete', 'perguruan_tinggi\BerkasPerguruanTinggiController@delete');
    });
});

$router->group(['prefix' => 'fakultas'], function () use ($router) {

    $router->get('all', 'fakultas\FakultasController@all');
    $router->post('store', 'fakultas\FakultasController@store');
    $router->get('{id}/show', 'fakultas\FakultasController@show');
    $router->patch('{id}/update', 'fakultas\FakultasController@update');
    $router->delete('{id}/delete', 'fakultas\FakultasController@delete');
    
    $router->group(['prefix' => 'berkas'], function () use ($router) {
        $router->get('all', 'fakultas\BerkasFakultasController@all');
        $router->post('store', 'fakultas\BerkasFakultasController@store');
        $router->get('{id}/show', 'fakultas\BerkasFakultasController@show');
        $router->patch('{id}/update', 'fakultas\BerkasFakultasController@update');
        $router->delete('{id}/delete', 'fakultas\BerkasFakultasController@delete');
    });
});

$router->group(['prefix' => 'program-studi'], function () use ($router) {

    $router->get('all', 'program_studi\ProgramStudiController@all');
    $router->post('store', 'program_studi\ProgramStudiController@store');
    $router->get('{id}/show', 'program_studi\ProgramStudiController@show');
    $router->patch('{id}/update', 'program_studi\ProgramStudiController@update');
    $router->delete('{id}/delete', 'program_studi\ProgramStudiController@delete');
    
    $router->group(['prefix' => 'berkas'], function () use ($router) {
        $router->get('all', 'program_studi\BerkasProgramStudiController@all');
        $router->post('store', 'program_studi\BerkasProgramStudiController@store');
        $router->get('{id}/show', 'program_studi\BerkasProgramStudiController@show');
        $router->patch('{id}/update', 'program_studi\BerkasProgramStudiController@update');
        $router->delete('{id}/delete', 'program_studi\BerkasProgramStudiController@delete');
    });
});

$router->group(['prefix' => 'dosen'], function () use ($router) {
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
});

$router->group(['prefix' => 'matakuliah'], function () use ($router) {
    
    $router->get('all', 'matakuliah\MatakuliahController@all');
    $router->post('store', 'matakuliah\MatakuliahController@store');
    $router->get('{id}/show', 'matakuliah\MatakuliahController@show');
    $router->patch('{id}/update', 'matakuliah\MatakuliahController@update');
    $router->delete('{id}/delete', 'matakuliah\MatakuliahController@delete');

    $router->group(['prefix' => 'ajar'], function () use ($router) {
        $router->get('all', 'matakuliah\MatakuliahAjarController@all');
        $router->post('store', 'matakuliah\MatakuliahAjarController@store');
        $router->get('{id}/show', 'matakuliah\MatakuliahAjarController@show');
        $router->patch('{id}/update', 'matakuliah\MatakuliahAjarController@update');
        $router->delete('{id}/delete', 'matakuliah\MatakuliahAjarController@delete');
    });
});

