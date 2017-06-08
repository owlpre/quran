<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latin extends Model
{
    protected $connection = 'andi.latin';
    protected $table = 'quran';

    public function getTextAttribute($text) {
        $search = [
            "$",
            "[",
            "&",
            "%",
            "*",
            "^",
            "(",
            "K",
            "khaaa",
            "khaa",
            "kha",
            "raaa",
            "raa",
            "ra",
            "#",
            "shaaa",
            "shaa",
            "sha",
            "D",
            "dhaaa",
            "dhaa",
            "dha",
            "T",
            "thaaa",
            "thaa",
            "tha",
            "Z",
            "zhaaa",
            "zhaa",
            "zha",
            "G",
            "ghaaa",
            "ghaa",
            "gha",
            "qaaa",
            "qaa",
            "qa",
            "allaah",
            "ullaah",
            "H",
        ];
        $replace = [
            "aa",
            "aaa",
            "aaa",
            "ii",
            "iii",
            "uu",
            "uuu",
            "kh",
            "khooo",
            "khoo",
            "kho",
            "rooo",
            "roo",
            "ro",
            "sh",
            "shooo",
            "shoo",
            "sho",
            "dh",
            "dhooo",
            "dhoo",
            "dho",
            "th",
            "thooo",
            "thoo",
            "tho",
            "zh",
            "zhooo",
            "zhoo",
            "zho",
            "gh",
            "ghooo",
            "ghoo",
            "gho",
            "qooo",
            "qoo",
            "qo",
            "alloh",
            "ulloh",
            "ḥ",
        ];
        return str_replace($search, $replace, $text);
    }
}
