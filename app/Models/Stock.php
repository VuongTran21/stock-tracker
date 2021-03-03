<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'stock';
}
