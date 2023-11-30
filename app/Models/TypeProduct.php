<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TypeProduct extends Model
{
    use HasFactory;
    protected $table = 'type_products';
    public $timestamp = false;

    public function providers(): BelongsToMany
    {
        return $this->belongsToMany(Provider::class, 'provider_type_product');
    }
}
