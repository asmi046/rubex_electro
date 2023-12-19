<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zayavka extends Model
{
    use HasFactory;

    protected $fillable = [
        'familia',
        'name',
        'othestvo',
        'email',
        'ogrn',
        'inn',
        'orgforma',
    ];
}
