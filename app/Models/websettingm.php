<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class websettingm extends Model
{  
    protected $table = 'websettingms';
    // protected $fillable = [
    //     'site_title',
    //     'description',
    //     'keywords',
    //     'logo',
    //     'favicon',
    //     'header_script',
    //     'footer_script', 
    // ];
    use HasFactory;
}
