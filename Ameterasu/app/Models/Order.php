<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'name', 'price', 'amount', 'user_id'];

    use HasFactory;

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
