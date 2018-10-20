<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function commodity()
    {
        return $this->hasMany(Commodity::class,"part_id");
    }
    protected $fillable=["part"];
}
