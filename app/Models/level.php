<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;

    // protected $guarded = [
    // 'mc'
    // ];

    protected $fillable = [
        'mc', 'capacity', 'min', 'max'
    ];
    protected $primaryKey = 'mc';
}
