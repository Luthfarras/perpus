<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKembali extends Model
{
    use HasFactory;
    protected $table = 'detail_kembali';
    protected $guarded = ['id'];

}
