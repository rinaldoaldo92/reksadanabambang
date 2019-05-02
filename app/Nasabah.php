<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table = 'nasabah';    

    protected $fillable = ['nama', 'email', 'username', 'password', 'status', 'custid'];

}
