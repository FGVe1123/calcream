<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sabor extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['sabor'];

    public function sabor()
    {
        return $this->belongsTo(Producto::class);
    }
}
