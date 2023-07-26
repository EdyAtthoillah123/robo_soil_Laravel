<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';

    protected $fillable = ['image', 'title', 'description'];
}
