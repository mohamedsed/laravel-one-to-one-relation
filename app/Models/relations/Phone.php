<?php

namespace App\Models\relations;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
  protected $fillable = [
        'code',
        'phone',
        'user_id',
    ];
    public $timestamps= false;
    protected $hidden = ['user_id' , 'created_at' , 'updated_at'];

    
    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
