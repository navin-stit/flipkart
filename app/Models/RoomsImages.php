<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomsImages extends Model
{
     protected $fillable = [
        'rooms_id ',
        'images',
                   
    ];
     
     
       protected $table = 'rooms_images';
}
