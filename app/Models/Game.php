<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public const CREATED_AT = 'date_added';
    use HasFactory;
    protected $fillable = [
        'date_added',
    ];
}
