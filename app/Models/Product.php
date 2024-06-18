<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','product_title','club_id','type'];
    
    public function club(){
        return $this->belongsTo(Club::class,'club_id','id');
    }
}
