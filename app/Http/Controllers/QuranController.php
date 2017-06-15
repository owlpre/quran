<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sura;
use App\Aya;

class QuranController extends Controller
{
    public function alphabets() {
        return view('quran.as');
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
