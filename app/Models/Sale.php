<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function clients(){
        return $this->belongsTo(Client::class);

    }

    public function sale_details(){
        return $this->hasMany(Sale_detail::class);
    }
}
