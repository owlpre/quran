<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sura;
use App\Aya;
use App\Translator;
use App\Data;

class QuranController extends Controller
{
    public function alphabets() {
        $suras = Data::$suras;
        return view('quran.as', [
            'suras' => $suras,
        ]);
    }

    public function sura(Sura $sura) {
        dd($sura);
    }

    public function aya(Sura $sura, $aya) {
        $aya = $sura->ayas()->where('aya_id', $aya)->get()->first();
        return view('quran.aya', [
            'aya' => $aya,
        ]);
    }

    public function index() {
        $suras = Sura::all();
        $aya_count = Aya::count();
        return view('quran.index', [
            'suras' => $suras,
            'aya_count' => $aya_count,
        ]);
    }
}
