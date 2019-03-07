<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   protected $fillable = [
       'url',
       'cat_id',
   ];
}
