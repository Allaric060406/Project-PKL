<?php

namespace App\Models;

use App\Models\Tarif;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Pesanan extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'pasangger';
    protected $fillable = ['id', 'user_id', 'category_id','nama','tujuan','telfon','keperluan', 'Request', 'berangkat', 'pulang', 'Biaya','created_at', 'updated_at','Level'] ;
    public $timestamps=false;
    
    function User(){
		return $this->belongsTo('App\Models\User');
	}

  public function notif(){
    return $this->belongsTo(User::class,'user_id','name');
  }
  
  public function categories(){
    return $this->belongsTo(Category::class,'category_id','id');
  }

  public function tarifs(){
    return $this->belongsTo(Tarif::class,'Biaya','id');
  }

}
