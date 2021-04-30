<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkSwitch extends Model
{
    use HasFactory;

    public function building() {
        return $this->belongsTo(Building::class);
    }

    public function ports() {
        return $this->hasMany(Port::class);
    }
}
