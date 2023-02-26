<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = ['names', 'reks',  'logo'];

    public function order()
    {
        return $this->hasMany(Order::class, 'names', 'id');
    }
}
