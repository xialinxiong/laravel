<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fenlei extends Model
{
    public function article()
    {
        return $this->hasMany(Article::class,"fenlei_id");
   }
    protected $fillable=["fenlei","id"];
}
