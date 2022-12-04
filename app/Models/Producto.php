<?php

namespace App\Models;

use App\Models\Sabor;
use App\Models\Tamanio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = ['sabor_id', 'tamanio_id','sabor','tamanio','precio' ,'stock'];
    

    public function producto_sabor()
    {
        return $this->hasMany(Sabor::class);
    }   
        

    public function productos_tamanio()
    {
        return $this->hasMany(Tamanio::class);
    }
}
