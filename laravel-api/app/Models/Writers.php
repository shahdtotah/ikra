<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writers extends Model
{
    use HasFactory;
    public function bookss(){
        return $this->hasMany(Books::class);
    }
    //
}
