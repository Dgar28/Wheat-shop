<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Provider extends Model
{
    use HasFactory;

    protected $table = "providers";
    public $timestamps = false;

    public function type_products(): BelongsToMany
    {
        return $this->belongsToMany(TypeProduct::class, 'provider_type_product');
    }
}
