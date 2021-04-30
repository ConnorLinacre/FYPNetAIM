<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public function campus() {
        return $this->belongsTo(Campus::class);
    }

    public function switches() {
        return $this->hasMany(NetworkSwitch::class);
    }
}
