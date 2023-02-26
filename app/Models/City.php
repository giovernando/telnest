<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    // protected $table  = 'cities'; //dilakukan jika nama model dan tabel berbeda

    protected $fillable = ['name', 'photo']; //fillable adalah kolom table yang boleh di isi
    protected  $guarded = ['']; //guarded adalah kolom tabel yang tidak boleh di isi

    public function houtel()
    {
        return $this->hasMany(houtel::class, 'cities_id', 'id');
    }
}
