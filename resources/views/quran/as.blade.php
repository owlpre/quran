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
        static $ars = [
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
            'ً' =>
                [ 2, 'an',],
            'ٍ' =>
                [ 2, 'in',],
            'ٌ' =>
                [ 2, 'un',],
            'ى' =>
                [ 2, "",],
            'ّ' =>
                [ 3, '',],
            'أ' =>
                [ 4, "", 'a', "'"],
            'إ' =>
                [ 4, "", 'i', "'"],
            'ئ' =>
                [ 4, "", 'i', "'"],
            'ؤ' =>
                [ 4, "", 'u', "'"],
            'ا' =>
                [ 5, '', 'a', "'"],
            'ء' =>
                [ 6, "'", ],
            'ْ' =>
                [ 7, ],
        ];
        static $data = [];
        var $text = "";

        public function __construct() {
            if (empty(self::$data)) {
                foreach (self::$ars as $i => $v) {
                    $arc = new ArC($v);
                    self::$data[$i] = $arc;
                }
            }
        }

        public function process() {
            $translation = "";
            $ars = preg_split('//u', $this->text, null, PREG_SPLIT_NO_EMPTY);
            for ($i = 0;$i < count($ars);$i++) {
                $ar = $ars[$i];
                $arc = self::$data[$ar];
                $tr = $arc->tr;
                $prev_ar = @$ars[$i - 1];
                $prev_arc = @self::$data[$prev_ar];
                $next_ar = @$ars[$i + 1];
                $next_arc = @self::$data[$next_ar];
                if (
                    (
                        $arc->type == 4
                        or $arc->type == 5
                    )
                    and $next_ar
                    and $next_arc->type == 7
                ) {
                    $tr = $arc->tr3;
                }
                if ($arc->type == 3) {
                    $tr = $prev_arc->tr;
                }
                if (
                    (
                        $arc->type == 5
                    )
                    and $i == 2
                    and count($ars) == 3
                ) {
                    $tr = $arc->tr2;
                }
                $translation .= $tr;
            }
            $this->translation = $translation;
            return $this;
        }

        public function add($ars, $i) {
            $ar = $ars[$i];
            $this->text .= $ar;
            $arc = self::$data[$ar];
            $next_ar = @$ars[$i + 1];
            $next_arc = @self::$data[$next_ar];
            switch ($arc->type) {
                case 1:
                    if ($next_ar) {
                        if ($next_arc->type == 1) {
                            return true;
                        }
                    }
                    break;
                case 2:
                case 7:
                    if ($next_ar) {
                        if ($next_arc->type == 5) {
                            return false;
                        }
                    }
                    return true;
                case 3:
                    if ($next_ar) {
                        if (
                            $next_arc->type == 1
                            or $next_arc->type == 5
                        ) {
                            return true;
                        }
                    }
                    break;
                case 4:
                    if ($next_ar) {
                        if (
                            $next_arc->type == 1
                            or $next_arc->type == 4
                            or $next_arc->type == 5
                        ) {
                            return true;
                        }
                    }
                    break;
                case 5:
                    if ($next_ar) {
                        if (
                            $next_arc->type == 1
                            or $next_arc->type == 4
                            or $next_arc->type == 6
                        ) {
                            return true;
                        }
                    }
                    break;
            }
            return false;
        }
    }

    class ArC {
        public function __construct($data) {
            $this->type = @$data[0];
            $this->tr   = @$data[1];
            $this->tr2  = @$data[2];
            $this->tr3  = @$data[3];
        }
    }

    class Word {
        public function __construct($text) {
            $this->text = $text;
            $this->_();
            $this->__();
        }

        private function __() {
            $parts = [];
            foreach ($this->parts as $part) {
                $parts[] = $part->translation;
            }
            $this->translation = implode('', $parts);
        }

        private function _() {
            $this->parts = [];
            $ars = preg_split('//u', $this->text, null, PREG_SPLIT_NO_EMPTY);
            $part = new Part();
            for ($i = 0;$i < count($ars);$i++) {
                $newPart = $part->add($ars, $i);
                if ($newPart) {
                    $this->parts[] = $part->process();
                    $part = new Part();
                }
            }
            if ($part->text) {
                $this->parts[] = $part->process();
            }
        }
    }

    class Translator {
        private $text, $words;
        
        public function __construct($text) {
            $this->text = $text;
            $this->words = [];
            $words = preg_split('/\s+/', $this->text);
            foreach ($words as $word) {
                $this->words[] = new Word($word);
            }
            $this->_();
        }

        private function _() {
            $words = [];
            foreach ($this->words as $word) {
                $words[] = $word->translation;
            }
            $this->translation = implode(' ', $words);
        }
    }

    foreach ($suras as $k => $v) {
        try {
            dump((new Translator($k)));
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
