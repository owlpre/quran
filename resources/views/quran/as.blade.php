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
    $ars = [
        'ا' => 'a',
        'ب' => 'b',
        'ت' => 't',
        'ث' => 'ts',
        'ج' => 'j',
        'ح' => 'H',
        'خ' => 'kh',
        'د' => 'd',
        'ذ' => 'dz',
        'ر' => 'r',
        'ز' => 'z',
        'س' => 's',
        'ش' => 'sy',
        'ص' => 'sh',
        'ض' => 'dh',
        'ط' => 'th',
        'ظ' => 'dh',
        'ع' => '\'a',
        'غ' => 'gh',
        'ف' => 'f',
        'ق' => 'q',
        'ك' => 'k',
        'ل' => 'l',
        'م' => 'm',
        'ن' => 'n',
        'ه' => 'h',
        'و' => 'w',
        'ي' => 'y',
        'ة' => 'ht',
    ];
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
                    @foreach ($ars as $k => $v)
                        <td>
                            {{ $k }}
                            <hr>
                            {{ $v }}
                        </td>
                    @endforeach
                </tr>
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
