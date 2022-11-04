<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class season extends Model
{
    use HasFactory;

    public function series()
    {
        return $this->belongsTo(serie::class);
    }

    public function episodes()
    {
        return $this->hasMany(episode::class);
    }
}
