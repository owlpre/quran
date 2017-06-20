<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sura;
use App\Aya;
use App\Translator;
use App\Data;

class QuranController extends Controller
{
    public function tree() {
        $suras = Sura::all();
        $indexs = [
            1   => [1,  7,  13,   19,  25],
            31  => [31, 37, 43,   49,  55],
            61  => [61, 67, 73,   79,  85],
            91  => [91, 97, 103, 109,    ],
        ];
        return view('quran.tree', [
            'suras' => $suras,
            'indexs' => $indexs,
        ]);
    }

    public function alphabets() {
        $suras = Data::$suras;
        return view('quran.as', [
            'suras' => $suras,
        ]);
    }

    public function sura(Sura $sura) {
        dd($sura);
    }

    public function aya(Sura $sura, $aya_start, $aya_end = false) {
        if ($aya_end) {
            $ayas = $sura->ayas()->where([
                ['aya_id', '>=', $aya_start],
                ['aya_id', '<=', $aya_end],
            ])->get();
        } else {
            $ayas = $sura->ayas()->where([
                ['aya_id', '=', $aya_start],
            ])->get();
        }
        return view('quran.aya', [
            'ayas' => $ayas,
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
