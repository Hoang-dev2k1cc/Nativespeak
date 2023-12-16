<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $table = "video";
    protected $fillable = ['id','link','id_word'];
    function subtitle(){
        return $this->hasMany(subtitle::class,'id_vdeo','id');
    }
}
