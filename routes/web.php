<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TraveltourController;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('about-us',[PageController::class,'aboutus'])->name('about');
Route::get('/contact-us',[PageController::class,'contact'])->name('contact_us');


// pictorials
Route::get('/pictorials', [PageController::class, 'pictorials'])->name('pictorials');
Route::get('/theark', [PageController::class, 'theark'])->name('theark');
Route::get('maracamp', [PageController::class, 'maraleisurecamp'])->name('maracamp');
Route::get('aberdareclub', [PageController::class, 'theaberdareclub'])->name('aberdareclub');
// Route::get('/maraflight', [PageController::class, 'maraflight'])->name('maraflight');

// traveltours
Route::get('adventure',[TraveltourController::class, 'adventure'])->name('adventurepackages');
Route::get('day',[TraveltourController::class, 'day'])->name('daypackages');
Route::get('family',[TraveltourController::class, 'family'])->name('familypackages');
Route::get('luxury-safari',[TraveltourController::class, 'luxury_safari'])->name('luxury-safari-packages');
Route::get('cultural-historical',[TraveltourController::class, 'cultural_historical'])->name('cultural-historicalpackages');
Route::get('mice',[TraveltourController::class, 'mice'])->name('mice=packages');


Route::get('/best-tour-packages', [PageController::class, 'package'])->name('packages');
Route::get('/three-days-luxury-lodge-safari-Amboseli-National-Park', [PageController::class, 'threeDaysLuxuryLodgeSafariAmboseli'])->name('three-days-luxury-lodge-safari-Amboseli');
// Route::get('/three-days-luxury-lodge-safari-Samburu-National-Park', [PageController::class, 'threedaysLuxuryLodgeSafariSamburuNationalPark'])->name('Samburu-National-Park');
// Route::get('/four-days-luxury-lodge-safari-Lake-Nakuru-and-Masai-Mara', [PageController::class, 'fourDaysSafariLakeNakuruAndMasaiMara'])->name('safari-Lake-Nakuru-and-Masai-Mara');
// Route::get('/five-days-luxury-lodge-safari-amboseli-Tsavo-West-and Tsavo-East', [PageController::class, 'fiveDaysSafariAmboseliTsavoWestAndEast'])->name('AmboseliTsavoWestAndEast');
Route::get('/five-days-Aberdare-lake-Nakuru-Masai-Mara', [PageController::class, 'aberdareLakeNakuruMasaiMara'])->name('aberdareLakeNakuruMasaiMara');
Route::get('/Seven-days-luxury-lodge-safari-Masai-Mara-Lake-Nakuru-Naivasha-Amboseli', [PageController::class, 'masaiMaraLakeNakuruNaivashaAmboseli'])->name('masaiMaraLakeNakuruNaivashaAmboseli');
Route::get('/seven-Days-Luxury-lodge-Amboseli-OlPejeta-Nakuru-MasaiMara', [PageController::class, 'sevenDaysAmboseliOlPejetaNakuruMasaiMara'])->name('sevenDaysAmboseliOlPejetaNakuruMasaiMara');
Route::get('/aberdares-OlPejeta-lake-Nakuru-MasaiMara', [PageController::class, 'aberdaresOlpejetaNakuruMasaiMara'])->name('aberdaresOlpejetaNakuruMasaiMara');
Route::get('/best-of-the-northern-and-sourthern-circuit', [PageController::class, 'bestOfTheNorthernAndSourthenCircuit'])->name('bestOfTheNorthernAndSourthenCircuit');
Route::get('samburu-Nakuru-MasaiMara-Naivasha-Amboseli-TsavoWest', [PageController::class, 'samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest'])->name('samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest');
Route::get('mara-flight-adventure', [PageController::class, 'maraFlightAdventure'])->name("maraFlightAdventure");
Route::get('masa-mara-samburu-fly', [PageController::class, 'masaiMaraSamburuFly'])->name("masaiMaraSamburuFly");
Route::get('four-days-Tsavo-west-sarova-taita-Tsavo-east', [PageController::class, 'fourDaysTsavoWestSarovaTsavoEst'])->name("fourDaysTsavoWestSarovaTsavoEst");
Route::get('experience-wonders-in-Mt-Kenya', [PageController::class, 'experienceWonderMtKenya'])->name("experienceWonderMtKenya");
Route::get('lake-Nakuru-Amboseli', [PageController::class, 'lakeNakuruAmboseli'])->name("lakeNakuruAmboseli");
Route::get('historical-Tour-Kenya', [PageController::class, 'historicalTourKenta'])->name('historicalTourKenta');
Route::get('mount-kenya-treck', [PageController::class, 'mountKenyaTreck'])->name('mountKenyaTreck');
Route::get('nairobi-national-park-and-animal-orphanage', [PageController::class, 'nairobiNationalPark'])->name('nairobiNationalPark');
Route::get('days-tour', [PageController::class, 'daystour'])->name('daystour');


Route::post('book-now', [PageController::class, 'bookPackage'])->name('book-package');
