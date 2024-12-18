<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Productpertanian extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function partners()
    {
        return $this->belongsTo(Partners::class);
    }

    public function pertanian()
    {
        return $this->belongsTo(Pertanian::class);
    }

}
