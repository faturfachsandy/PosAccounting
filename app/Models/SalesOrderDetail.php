<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesOrderDetail extends Model
{
    protected $fillable = ['harga', 'jumlah', 'tipe_diskon', 'diskon'];
}
