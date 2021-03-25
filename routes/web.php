<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
   echo '<h1>Hello World</h1>';
   echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/fasilkom/rizki', function () {
    echo '<h2 style="text-align: center;"><u>Welcome Rizki</u></h2>';
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

// Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
//     return "Cek sisa stok untuk $jenis $merek";
// });

// Route::get('/stok_barang/{jenis}/{merek}', function($a, $b) {
//     echo "Cek sisa stok untuk $a $b";
// });

// Route::get('/stok_barang/{jenis?}/{merek?}',
//     function ($a = 'smartphone', $b = 'samsung') {
//     return "Cek sisa stok untuk $a $b";
// });

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id = $id";
// })->where('id', '[0-9]+');

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id = $id";
// })->where('id', '[A-Z]{2}[0-9]+');

// Route::get('/hubungi-kami', function () {
//     return '<h1>Hubungi Kami</h1>';
// });

// Route::redirect('/contact-us', '/hubungi-kami');

// Route::prefix('/admin')->group(function () {
//     Route::get('/mahasiswa', function () {
//         echo "<h1>Daftar Mahasiswa</h1>";
//     });

//     Route::get('/dosen', function () {
//         echo "<h1>Daftar Dosen</h1>";
//     });

//     Route::get('/karyawan', function () {
//         echo "<h1>Daftar karyawan</h1>";
//     });
// });

// Route::fallback(function () {
//     return "Maaf, alamat tidak ditemukan";
// });

// Route::get('/hello', function () {
//     return 'Hello World!';
// })

Route::get('/hello', function () {
    $hello = ['Hello World', 2 => ['Hello Jakarta', 'Hello Medan']];
    echo '<pre>';
    print_r($hello);
    echo '</pre>';
    die();
    return $hello;
});
