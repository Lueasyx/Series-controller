<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class episode extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function season()
    {
        return $this->belongsTo(season::class);
    }
}
