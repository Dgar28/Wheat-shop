<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductRecord extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
