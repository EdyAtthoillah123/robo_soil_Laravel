<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerbaikanModel extends Model
{
    protected $table = 'perbaikan';

    protected $fillable = ['saran_perbaikan'];
}
