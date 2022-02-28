<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresses extends Model
{
    use HasFactory;
    protected  $fillable=[
        'name',
        'firstname',
        'professional',
        'civility',
        'company',
        'adresse',
        'adressbis',
        'bp',
        'postal',
        'city',
        'country_id',
        'phone'
    ];
}
