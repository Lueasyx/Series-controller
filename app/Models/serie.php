<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serie extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function temporadas()
    {
        return $this->hasMany(season::class, 'series_id');
    }
}

