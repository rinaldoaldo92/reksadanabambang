<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table = 'ulasan_promo';

    protected $fillable = ['judul', 'konten', 'kategori', 'created_at', 'updated_at'];

}
