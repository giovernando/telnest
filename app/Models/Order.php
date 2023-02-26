<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['houtels_id', 'rooms_id','checks_id','check_out', 'banks_id', 'names', 'phones', 'email'];

    public function houtel()
    {
        return $this->belongsTo(Houtel::class, 'houtels_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'rooms_id', 'id');
    }

    public function bank()
    {
        return $this->hasMany(Bank::class, 'names', 'id');
    }
}
