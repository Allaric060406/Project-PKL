<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regis extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['id','name', 'email', 'password', 'created_at', 'updated_at'] ;
    public $timestamps=false;
}

