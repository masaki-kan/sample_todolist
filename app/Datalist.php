<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datalist extends Model
{
    //
    protected $fillable = [
        'id',
        'title',
        'user_id',
        ];
        
    public function cards(){
        return $this->hasMany('App\Card');
    }
}
