<?php

namespace App\Http\Controllers;

use App\Mail\BookPackage;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Mail;


class PageController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function aboutus(){
        return view('client.about');
    }
    public function contact(){
        return view('client.contact');
    }
    public function maraFlight()
    {
        return view('client.packages.masai-mara-flight');
    }
    public function package()
    {
        return view('client.packages.packages');
    }

    public function threeDaysLuxuryLodgeSafariAmboseli()
    {
        # code...
        return view('client.packages.luxuryLodgeAmboseliNationalPark');
    }
    public function threedaysLuxuryLodgeSafariSamburuNationalPark()
    {
        return view('client.packages.samburuNationalReserve');
    }
    public function fourDaysSafariLakeNakuruAndMasaiMara()
    {
        # code...
        return view('client.packages.LakeNakuruMasaiMara');
    }
    public function fiveDaysSafariAmboseliTsavoWestAndEast()
    {
        return view('client.packages.amboseliTsavoWestTsavoEastNationalPark');
    }
    public function aberdareLakeNakuruMasaiMara()
    {
        # code...
        return view('client.packages.aberdareLakeNakuruMasaiMara');
    }
    public function masaiMaraLakeNakuruNaivashaAmboseli()
    {
        # code...
        return view("client.packages.sevenDaysMasaiNakuruAmboseli");
    }
    public function sevenDaysAmboseliOlPejetaNakuruMasaiMara()
    {
        # code...
        return view('client.packages.sevenDaysAmboseliOlPejetaNakuruMasaiMara');
    }
    public function aberdaresOlpejetaNakuruMasaiMara()
    {
        # code...
        return view('client.packages.aberdareLakeNakuruMasaiMara');
    }
    public function bestOfTheNorthernAndSourthenCircuit()
    {
        # code...
        return view('client.packages.northernSouthenCircuit');
    }
    public function samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest()
    {
        # code...
        return view('client.packages.samburuNakuruMasaiMaraNaivashaAmboseliTsavoWest');
    }
    public function maraFlightAdventure()
    {
        # code...
        return view('client.packages.maraFightAdventure');
    }
    public function masaiMaraSamburuFly()
    {
        # code...
        return view("client.packages.masaiMaraSamburu");
    }

    public function fourDaysTsavoWestSarovaTsavoEst()
    {
        # code...
        return view('client.packages.fourDaysTsavoWestSarovaTaitaTsavoWest');
    }
    public function experienceWonderMtKenya()
    {
        # code...
        return view("client.packages.experienceWonderMtKenya");
    }
    public function lakeNakuruAmboseli()
    {
        # code...
        return view('client.packages.lakeNakuruAmboseli');
    }
    public function historicalTourKenta()
    {
        # code...
        return view('client.packages.historicalTourKenta');
    }
    public function mountKenyaTreck()
    {
        # code...
        return view('client.packages.mountKenyaTreck');
    }
    public function nairobiNationalPark()
    {
        return view('client.packages.nairobinationalparkandandanimalorphanage');
    }

    public function daystour()
    {
        # code...
        return view('client.packages.daystour');
    }


    public function pictorials()
    {
        return view('client.pictorials');
    }
    public function theark()
    {
        return view('client.pictorios.theark');
    }
    public function maraleisurecamp()
    {
        return view('client.pictorios.maraleisurecamp');
    }
    public function theaberdareclub()
    {
        return view('client.pictorios.theaberdarecountryclub');
    }

    public function bookPackage(BookRequest $request)
    {
        return $request;
        $bookData = $request->all();
        Mail::to("info@tavaratoursandtravel.com")
            ->cc("benerd@tavaratoursandtravel.com")
            ->bcc("Kimunto@tavaratoursandtravel.com")

            ->send(new BookPackage($bookData));
        return back();
    }
}
