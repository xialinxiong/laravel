<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function fenlei()
    {
        return $this->belongsTo(Fenlei::class,"fenlei_id");
    }
    protected $fillable=["name","content","fenlei_id"];
}
