<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodations extends Model
{
    use HasFactory;
    protected $fillable = ["room_name", "description", "standard_rack_rate", "image"];
}
