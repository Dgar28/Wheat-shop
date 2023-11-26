<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'product_code', 'type', 'archivo_location', 'archivo_name'];

    public function product_records(){
        return $this->hasMany(ProductRecord::class);
    }
}
