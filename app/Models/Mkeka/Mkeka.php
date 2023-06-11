<?php

namespace App\Models\Mkeka;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mkeka extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ["picture", "description", "total_olds", "price", "expires_at", "was_succeful", "type", "featureImage"];

    protected $dates = ['create_at'];
    // protected function picture(): Attribute
    // {
    //     return Attribute::make(fn ($val) => Storage::url($val));
    // }
    // protected function featureImage(): Attribute
    // {
    //     return Attribute::make(fn ($val) => Storage::url($val));
    // }
}
