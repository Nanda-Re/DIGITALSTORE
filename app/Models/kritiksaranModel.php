<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kritiksaranModel extends Model
{
    use HasFactory;

    protected $table = 'testimonis';
    protected $guarded = ['id_testimoni'] ;
    
}
