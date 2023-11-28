<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['client_code', 'client_name', 'age', 'phone', 'user_id'];

    public function sales(){
        return $this->hasMany(Sale::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client_name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Str::upper($value),
            set: fn ($value) => Str::slug($value),
        );
    }
}
