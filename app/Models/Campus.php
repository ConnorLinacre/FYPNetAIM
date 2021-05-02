<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function buildings() {
        return $this->hasMany(Building::class);
    }
}
