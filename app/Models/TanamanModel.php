<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanamanModel extends Model
{
    protected $table = 'tanaman';

    protected $fillable = ['saran_tanaman'];
}
