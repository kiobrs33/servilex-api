<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'adress',
        'city',
        'phone',
        'number_card',
        'expiration_month',
        'expiration_year',
        'security_code',
    ];
}
