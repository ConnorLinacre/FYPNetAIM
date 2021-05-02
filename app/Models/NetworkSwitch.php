<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkSwitch extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'floor', 'model'];

    public function building() {
        return $this->belongsTo(Building::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ports() {
        return $this->hasMany(Port::class, "switch_id");
    }
}
