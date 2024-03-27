<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arseh extends Model
{
    use HasFactory;

    protected $table = "arseh";

    protected $guarded = [
        "id"
    ];

    public $timestamps = false;
}
