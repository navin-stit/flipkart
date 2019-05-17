<?php

namespace App\Models;
use App\Models\RoomsImages;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    public function roomsImages() {
        return $this->hasOne(RoomsImages::class, 'rooms_id', 'id');
    }

        protected $fillable = [
        'room_number ',
        'defects',
                   
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     protected $hidden = [
        'remember_token',
    ];
     
    protected $table = 'rooms';

}
