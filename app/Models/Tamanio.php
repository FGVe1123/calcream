<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamanio extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['tamanio'];

    public function tamanio()
    {
        return $this->belongsTo(Producto::class);
    }
}
