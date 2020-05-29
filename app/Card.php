<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    protected $fiilable = [
        'id',
        'cards-title',
        'memo',
        'datalist_id',
        ];
}
