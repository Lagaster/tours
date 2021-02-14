<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/pictorials', [PageController::class, 'pictorials'])->name('pictorials');
Route::get('/theark', [PageController::class, 'theark'])->name('theark');
Route::get('maracamp', [PageController::class, 'maraleisurecamp'])->name('maracamp');
Route::get('aberdareclub', [PageController::class, 'theaberdareclub'])->name('aberdareclub');
Route::get('/maraflight', [PageController::class, 'maraflight'])->name('maraflight');
Route::get('/three-days-luxury-lodge-safari-Amboseli-National-Park', [PageController::class, 'threeDaysLuxuryLodgeSafariAmboseli'])->name('three-days-luxury-lodge-safari-Amboseli');
Route::get('/three-days-luxury-lodge-safari-Samburu-National-Park', [PageController::class, 'threedaysLuxuryLodgeSafariSamburuNationalPark'])->name('Samburu-National-Park');
Route::get('/four-days-luxury-lodge-safari-Lake-Nakuru-and-Masai-Mara', [PageController::class, 'fourDaysSafariLakeNakuruAndMasaiMara'])->name('safari-Lake-Nakuru-and-Masai-Mara');
Route::get('/five-days-luxury-lodge-safari-amboseli-Tsavo-West-and Tsavo-East', [PageController::class, 'fiveDaysSafariAmboseliTsavoWestAndEast'])->name('AmboseliTsavoWestAndEast');
Route::get('/five-days-Aberdare-lake-Nakuru-Masai-Mara', [PageController::class, 'aberdareLakeNakuruMasaiMara'])->name('aberdareLakeNakuruMasaiMara');
Route::get('/Seven-days-luxury-lodge-safari-Masai-Mara-Lake-Nakuru-Naivasha-Amboseli', [PageController::class, 'masaiMaraLakeNakuruNaivashaAmboseli'])->name('masaiMaraLakeNakuruNaivashaAmboseli');
Route::get('/seven-Days-Luxury-lodge-Amboseli-OlPejeta-Nakuru-MasaiMara', [PageController::class, 'sevenDaysAmboseliOlPejetaNakuruMasaiMara'])->name('sevenDaysAmboseliOlPejetaNakuruMasaiMara');
Route::get('/aberdares-OlPejeta-lake-Nakuru-MasaiMara', [PageController::class, 'aberdaresOlpejetaNakuruMasaiMara'])->name('aberdaresOlpejetaNakuruMasaiMara');
Route::get('/best-of-the-northern-and-sourthern-circuit', [PageController::class, 'bestOfTheNorthernAndSourthenCircuit'])->name('bestOfTheNorthernAndSourthenCircuit');
Route::get('samburu-Nakuru-MasaiMara-Naivasha-Amboseli-TsavoWest', [PageController::class, 'samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest'])->name('samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest');