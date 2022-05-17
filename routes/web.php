<?php
//Nama : Dwinta Septiana
//NPM  : G1A 020 041

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuaController;
use App\Http\Controllers\EnamController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\LimaController;
use App\Http\Controllers\SatuController;
use App\Http\Controllers\TigaController;
use App\Http\Controllers\EmpatController;
use App\Http\Controllers\TujuhController;
use App\Http\Controllers\DelapanController;
use App\Http\Controllers\SembilanController;


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

Route::get('/Beranda', function () {
    echo ("Ini adalah halaman beranda");
});

Route::get('/Profil', function () {
    echo ("Ini adalah halaman profil");
});

Route::get('/Profil/AwanTinggi', function () {
    echo ("Awan Tinggi diantaranya Awan Cirrus , Awan Cirrocumulus , Awan Cirrostratus");
});

Route::get('/Profil/AwanRendah', function () {
    echo ("Awan Rendah diantaranya Awan Strato cumulus , Awan Stratus , Awan Nimbostratus");
});

Route::get('/Tanah', function () {
    echo ("Ini merupakan halaman tanah");
});

Route::get('/Tanah/Tanah Vulkanik ', function () {
    echo ("Ini merupakan halaman Tanah Vulkanik ");
});

Route::get('/Tanah/Tanah Humus', function () {
    echo ("Ini merupakan halaman Tanah Humus");
});

Route::get('/Bebatuan', function () {
    echo ("Ini merupakan halaman Bebatuan");
});

Route::get('/Bebatuan/Beku', function () {
    echo ("Ini merupakan halaman Beku didalam Bebatuan");
});

Route::get('/Bebatuan/Beku/Tubir', function () {
    echo ("Ini merupakan halaman Tubir didalam Beku/Bebatuan");
});
 
Route::get('/jual', [JualController::class, 'DwintaS']);

Route::get('/satu', [ControllerOne::class, 'DwintaS']);

Route::get('/dua', [ControllerTwo::class, 'DwintaS']);

Route::get('/tiga', [ControllerThree::class, 'DwintaS']);

Route::get('/empat', [ControllerFour::class, 'DwintaS']);

Route::get('/lima', [ControllerFive::class, 'DwintaS']);

Route::get('/enam', [ControllerSix::class, 'DwintaS']);

Route::get('/tujuh', [ControllerSeven::class, 'DwintaS']);

Route::get('/delapan', [ControllerEight::class, 'DwintaS']);

Route::get('/sembilan', [ControllerNine::class, 'DwintaS']);
