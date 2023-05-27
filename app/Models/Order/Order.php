<?php

namespace App\Models\Order;

use App\Models\Mkeka\Mkeka;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'mkeka_id',
        'status',
        'amount',
        'description',
    ];
    protected $dates  = ["created_at"];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function mkeka()
    {
        return $this->belongsTo(Mkeka::class, 'mkeka_id');
    }
}
