<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // app/Models/Buku.php
protected $fillable = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];

}
