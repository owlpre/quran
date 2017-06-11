<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sura;
use App\Aya;

class QuranController extends Controller
{
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
        return redirect('/1/1');
    }
}
