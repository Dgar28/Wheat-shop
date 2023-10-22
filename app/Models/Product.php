<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Metadata\Api\Requirement;

class Product extends Model
{
    use HasFactory;

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }
}
