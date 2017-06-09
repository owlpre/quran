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

    private function clean($text) {
        $search = [
            'ۙ',
        ];
        $replace = [
            '',
        ];
        $text = htmlentities($text);
        $text = str_replace($search, $replace, $text);
        $text = trim($text);
        $text = preg_replace('/\s+/', ' ', $text);
        return $text;
    }

    public function aya(Sura $sura, $aya) {
        // $tes = "صُمٌّۢ بُكْمٌ عُمْىٌ فَهُمْ لَا يَرْجِعُوْنَ ۙ";
        // $text = "صُمٌّۢ بُكْمٌ عُمْىٌ فَهُمْ لَا يَرْجِعُوْنَ ۙ";
        // $clean = $this->clean($text);
        // dd($text, $clean, $tes);
        
        // $text = "صُمٌّۢ بُكْمٌ عُمْىٌ فَهُمْ لَا يَرْجِعُوْنَ ";
        // $s = preg_replace('/\s+/', ' ', $text);
        // dd($text, $s);

        $aya = $sura->ayas()->where('aya_id', $aya)->get()->first();
        return view('quran.aya', [
            'aya' => $aya,
        ]);
    }

    public function index() {
        return 'hello';
    }
}
