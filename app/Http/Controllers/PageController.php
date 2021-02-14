<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function maraFlight()
    {
        return view('client.packages.masai-mara-flight');
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
}