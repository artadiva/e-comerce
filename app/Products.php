<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $fillable = ['product_name','price','description','stock','weight','gambar'];
    protected $dates = ['deleted_at'];
}
