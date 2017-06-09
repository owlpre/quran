<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aya extends Model
{
    protected $fillable = [
        'aya_id', 'sura_id', 'text',
    ];

    public function texts() {
        return $this->hasMany(Text::class);
    }
}
