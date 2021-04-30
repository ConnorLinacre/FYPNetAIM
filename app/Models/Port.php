<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    use HasFactory;

    public function networkSwitch() {
        return $this->belongsTo(NetworkSwitch::class, "switch_id");
    }
}
