<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    'user_id', 'product', 'imei', 'bulkimei', 'time', 'nota', 'comentario', 'email', 'estado' 
    ];

    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function products()
    {
        return $this->hasManyThrough(Product::class, User::class);
    }
}
