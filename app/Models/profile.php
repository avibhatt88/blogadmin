<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{

    protected $table = 'userprofile';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    use HasFactory;

   
}
