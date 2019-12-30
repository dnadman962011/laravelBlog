<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $fillable=['BlogHeader','BlogBody','BlogAuthor','BlogThumbnail','CatigoryId'];
    public function getCatigory() {

        return catigory::where('id','=',$this->CatigoryId)->first()->catigroyColor;
    }
}
