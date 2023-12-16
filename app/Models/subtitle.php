<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subtitle extends Model
{

   use HasFactory;
   protected $table = "subtitle";

   public function video(){

      $this->hasOne(video::class,'id','video_id');

   }
}
