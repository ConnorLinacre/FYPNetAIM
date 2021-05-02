<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    use HasFactory;

    protected $fillable = ['port_number', 'access_point', 'installed_by', 'installed_on'];

    public function networkSwitch() {
        return $this->belongsTo(NetworkSwitch::class, "switch_id");
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
