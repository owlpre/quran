<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quran;
use App\Terjemahan;
use App\Jalalayn;
use App\Latin;

class AndiController extends Controller
{
    public function aya($sura, $aya) {
        $ayas = Quran::where([
            ['sura', $sura],
            ['aya', $aya],
        ])->get();
        $terjemahan = Terjemahan::where([
            ['sura', $sura],
            ['aya', $aya],
        ])->get();
        $jalalayn = Jalalayn::where([
            ['sura', $sura],
            ['aya', $aya],
        ])->get();
        $latin = Latin::where([
            ['sura', $sura],
            ['aya', $aya],
        ])->get();
        return view('andi.index', [
            'ayas' => $ayas,
            'terjemahan' => $terjemahan,
            'jalalayn' => $jalalayn,
            'latin' => $latin,
        ]);
    }

    public function index() {
        $ayas = Quran::where('sura', 1)->get();
        return view('andi.index', [
            'ayas' => $ayas,
        ]);
    }
}
