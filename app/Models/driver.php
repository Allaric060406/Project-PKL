<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $table = 'driver';
    protected $fillable = ['id', 'nama', 'nopol', 'biaya'] ;
    public $timestamps=false;
    
    function Pesanan(){
		return $this->hasOne('App\Models\Pesanan');
    }
}
