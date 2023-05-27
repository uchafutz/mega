<?php

namespace App\Models\Subsription;

use App\Models\Package\Package;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['user_id', 'package_id', 'status', 'date_from', 'date_to', 'active', 'description'];
    protected $dates  = ["date_from", "date_to"];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
