<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    //protected $fillable = ['nim','nama','tanggal_lahir','ipk'];
    protected $guarded = [];
    use SoftDeletes;
}
