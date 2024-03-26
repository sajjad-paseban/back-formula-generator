<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    use HasFactory;

    protected $table = "earningtollpropertiesyearly";

    protected $guarded = [
        "id"
    ];

    public $timestamps = false;
}
