@extends('layout.app')
<?php
    $suras = [
        "اَلْفَاتِحَة" => "al fatiHah",
        "اَلْبَقَرَة" => "al baqarah",
        "اَلِ عِمْرَان" => "ali 'imraan",
        "اَلنِّسَاء" => "an nisa'",
        "اَلْمَائِدَة" => "al maidah",
        "اَلْأَنْعَام" => "al an'am",
        "اَلْأَعْرَاف" => "al a'raf",
        "اَلْأَنْفَال" => "al anfal",
        "اَلتَّوْبَة" => "at tawbah",
        "يُونُس" => "yuunus",
        "هُود" => "huud",
        "يُوسُف" => "yuusuf",
        "اَلرَّعْد" => "ar ra'd",
        "اِبْرَاهِيم" => "ibraahiim",
        "اَلْحِجْر" => "al Hijr",
        "اَلنَّحْل" => "an naHl",
        "اَلْإِسْرَاء" => "al isra'",
        "اَلْكَهْف" => "al kahf",
        "مَرْيَم" => "maryam",
        "طَهَ" => "thaha",
        "اَلْأَنْبِيَاء" => "al anbiya'",
        "اَلْحَج" => "al Haj",
        "اَلْمُؤْمِنُون" => "al mu'minuun",
        "اَلنُّور" => "an nuur",
        "اَلْفُرْقَان" => "al furqan",
        "اَلشُّعَرَاء" => "asy syu'ara'",
        "اَلنَّمْل" => "an naml",
        "اَلْقَصَص" => "al qashash",
        "اَلْعَنْكَبُوت" => "al 'ankabuut",
        "اَلرُّوم" => "ar ruum",
        "لُقْمَان" => "luqman",
        "اَلسَّجْدَة" => "as sajdah",
        "اَلْأَحْزَاب" => "al aHzab",
        "سَبَإ" => "saba'",
        "فَاطِر" => "faathir",
        "يَس" => "yasin",
        "اَلصَّافَّات" => "as shaffat",
        "ص" => "shad",
        "اَلزُّمَر" => "az zumar",
        "غَافِر" => "ghaafir",
        "فُصِّلَت" => "fushshilat",
        "اَلشُّورَى" => "asy syuuraa",
        "اَلزُّخْرُف" => "az zukhruf",
        "اَلدُّخَان" => "ad dukhan",
        "اَلْجَاثِيَة" => "al jatsiyah",
        "اَلْأَحْقَاف" => "al aHqaf",
        "مُحَمَّد" => "muHammad",
        "اَلْفَتْح" => "al fatH",
        "اَلْحُجُرَات" => "al Hujurat",
        "ق" => "qaf",
        "اَلذَّارِيَات" => "adz dzariyat",
        "اَلطُّور" => "at thuur",
        "اَلنَّجْم" => "an najm",
        "اَلْقَمَر" => "al qamar",
        "اَلرَّحْمَن" => "ar raHman",
        "اَلْوَاقِعَة" => "al waqi'ah",
        "اَلْحَدِيد" => "al Hadiid",
        "اَلْمُجَادِلَة" => "al mujaadilah",
        "اَلْحَشْر" => "al Hasyr",
        "اَلْمُمْتَحَنَة" => "al mumtaHanah",
        "اَلصَّف" => "ash shaf",
        "اَلْجُمُعَة" => "al jumu'ah",
        "اَلْمُنَافِقُون" => "al munaafiquun",
        "اَلتَّغَابُن" => "at taghaabun",
        "اَلطَّلَاق" => "ath thalaq",
        "اَلتَّحْرِيم" => "at taHriim",
        "اَلْمُلْك" => "al mulk",
        "اَلْقَلَم" => "al qalam",
        "اَلْحَاقَّة" => "al Haqqah",
        "اَلْمَعَارِج" => "al ma'arij",
        "نُوح" => "nuuH",
        "اَلْجِن" => "al jin",
        "اَلْمُزَّمِّل" => "al muzzammil",
        "اَلْمُدَّثِّر" => "al muddatstsir",
        "اَلْقِيَامَة" => "al qiyaamah",
        "اَلْاِنْسَان" => "al insan",
        "اَلْمُرْسَلَات" => "al mursalat",
        "اَلنَّبَإ" => "an naba'",
        "اَلنَّازِعَات" => "an nazi'at",
        "عَبَسَ" => "'abasa",
        "اَلتَّكْوِير" => "at takwiir",
        "اَلْإِنْفِطَار" => "al infithar",
        "اَلْمُطَفِّفِين" => "al muthaffifiin",
        "اَلْإِنْشِقَاق" => "al insyiqaq",
        "اَلْبُرُوج" => "al buruuj",
        "اَلطَّارِق" => "ath thariq",
        "اَلْأَعْلَى" => "al a'laa",
        "اَلْغَاشِيَة" => "al ghaasyiyah",
        "اَلْفَجْر" => "al fajr",
        "اَلْبَلَد" => "al balad",
        "اَلشَّمْس" => "asy syams",
        "اَلْلَيْل" => "al layl",
        "اَلضُّحَى" => "adh dhuHaa",
        "اَلْاِنْشِرَاح" => "al insyiraH",
        "اَلتِّين" => "at tiin",
        "اَلْعَلَق" => "al 'alaq",
        "اَلْقَدْر" => "al qadr",
        "اَلْبَيِّنَة" => "al bayyinah",
        "اَلزَّلْزَلَة" => "az zalzalah",
        "اَلْعَادِيَات" => "al 'aadiyat",
        "اَلْقَارِعَة" => "al qaari'ah",
        "اَلتَّكَاثُر" => "at takaatsur",
        "اَلْعَصْر" => "al 'ashr",
        "اَلْهُمَزَة" => "al humazah",
        "اَلْفِيل" => "al fiil",
        "قُرَيْش" => "quraysy",
        "اَلْمَاعُون" => "al ma'uun",
        "اَلْكَوْثَر" => "al kawtsar",
        "اَلْكَافِرُون" => "al kafiruun",
        "اَلنَّصْر" => "an nashr",
        "اَلْلَهَب" => "al lahab",
        "اَلْإِخْلَاص" => "al ikhlash",
        "اَلْفَلَق" => "al falaq",
        "اَلنَّاس" => "an nas",
    ];

    class Part {
        private $arcs;
        var $trs;

        public function __construct() {
            $ars = [
                'ا' =>
                    [ 1, '',  ],
                'ب' =>
                    [ 1, 'b', ],
                'ت' =>
                    [ 1, 't', ],
                'ث' =>
                    [ 1, 'ts',],
                'ج' =>
                    [ 1, 'j', ],
                'ح' =>
                    [ 1, 'H', ],
                'خ' =>
                    [ 1, 'kh',],
                'د' =>
                    [ 1, 'd', ],
                'ذ' =>
                    [ 1, 'dz',],
                'ر' =>
                    [ 1, 'r',],
                'ز' =>
                    [ 1, 'z',],
                'س' =>
                    [ 1, 's',],
                'ش' =>
                    [ 1, 'sy',],
                'ص' =>
                    [ 1, 'sh',],
                'ض' =>
                    [ 1, 'dh',],
                'ط' =>
                    [ 1, 'th',],
                'ظ' =>
                    [ 1, 'dh',],
                'ع' =>
                    [ 1, "'",],
                'غ' =>
                    [ 1, 'gh',],
                'ف' =>
                    [ 1, 'f',],
                'ق' =>
                    [ 1, 'q',],
                'ك' =>
                    [ 1, 'k',],
                'ل' =>
                    [ 1, 'l',],
                'م' =>
                    [ 1, 'm',],
                'ن' =>
                    [ 1, 'n',],
                'ه' =>
                    [ 1, 'h',],
                'و' =>
                    [ 1, 'w',],
                'ي' =>
                    [ 1, 'y',],
                'ة' =>
                    [ 1, 'ht',],
                'َ' =>
                    [ 2, 'a',],
                'ِ' =>
                    [ 2, 'i',],
                'ُ' =>
                    [ 2, 'u',],
                'ّ' =>
                    [ 2, 'doble',],
                'ً' =>
                    [ 2, 'an',],
                'ٍ' =>
                    [ 2, 'in',],
                'ٌ' =>
                    [ 2, 'un',],
                'ْ' =>
                    [ 2, '',],
                ' ' =>
                    [ 2, ' ',],
                'ء' =>
                    [ 2, "'",],
            ];
            $this->arcs = [];
            foreach ($ars as $i => $v) {
                $arc = new ArC($v[0], $v[1]);
                $this->arcs[$i] = $arc;
            }
        }

        public function add($ar) {
            $arc = $this->arcs[$ar];
            $this->trs .= $arc->tr;
            if ($arc->type == 2) {
                return true;
            }
            return false;
        }
    }

    class ArC {
        public function __construct($type, $tr) {
            $this->type = $type;
            $this->tr = $tr;
        }
    }

    function to_latin($text) {
        $parts = [];
        $ars = preg_split('//u', $text, null, PREG_SPLIT_NO_EMPTY);;
        $part = new Part();
        for ($i = 0;$i < count($ars);$i++) {
            $ar = $ars[$i];
            $newPart = $part->add($ar);
            if ($newPart) {
                $parts[] = $part;
                $part = new Part();
            }
        }
        if ($part->trs) {
            $parts[] = $part;
        }
        $translation = '';
        for ($i = 0;$i < count($parts);$i++) {
            $translation .= $parts[$i]->trs;
        }
        return $translation;
    }

    foreach ($suras as $k => $v) {
        try {
            dump(to_latin($k));
        } catch (\Exception $e) {
            dump($e);
        }
    }
?>

@section('style')
    <style>
        table {
            font-size: 24px;
        }
        @font-face {
            font-family: 'qalammajeed';
            src: url({{ asset(
                '/font/qalammajeed.ttf'
            ) }});
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 table-responsive">
            <table class="table table-bordered">
                <tr>
{{--                     @foreach ($ars as $k => $v)
                        <td>
                            {{ $k }}
                            <hr>
                            {{ $v }}
                        </td>
                    @endforeach
 --}}                </tr>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12"
        >
            @foreach ($suras as $ar => $tr)
                <div>
                    {{ $tr }}
                    <!--
                    <span
                        dir="rtl"
                        lang="ar"
                        style="
                            font-family: qalammajeed;
                            font-size: 48px;
                        "
                    >{!! $ar !!}</span>
                    -->
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
