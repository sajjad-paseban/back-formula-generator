<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variables extends Model
{
    use HasFactory;

    protected $table = "formula_variables";

    protected $guarded = [
        'id'
    ];
}
