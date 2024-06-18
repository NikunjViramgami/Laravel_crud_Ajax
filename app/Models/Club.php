<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['business_name','group_id','club_number','club_name','club_state','club_desciption',
    'club_slug','website_title','website_link','club_logo','club_banner'];

    public function product(){
        return $this->hasMany(Product::class,'club_id','id');
    }
}
