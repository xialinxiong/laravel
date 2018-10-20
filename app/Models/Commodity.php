<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    public function part()
    {
        return $this->belongsTo(Part::class,"part_id");
    }
    protected $fillable=["name","price","part_id","frame","frequency"];
}
