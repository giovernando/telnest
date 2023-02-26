<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['houtels_id','type','harga','deskription','photo'];

    public function houtel()
    {
        return $this->belongsTo(Houtel::class, 'houtels_id', 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'rooms_id', 'id');
    }
}
