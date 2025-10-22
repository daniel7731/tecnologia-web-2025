<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'product';

   
    protected $primaryKey = 'id';

    
    public $incrementing = true;
    protected $keyType = 'int';


    public $timestamps = false;

    
    protected $fillable = [
        'nombre',
        'precio',
    ];
}
