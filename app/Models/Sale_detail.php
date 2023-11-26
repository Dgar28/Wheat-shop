<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_detail extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function sales(){
        return $this->belongsTo(Sale::class);
    }

   // public function products(){
     //   return $this->belongsTo(Product::class);
   // }


}