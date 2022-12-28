<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Train extends Model
{
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }


}
