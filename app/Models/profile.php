<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded =[];

    use HasFactory;

    public function followers(){

        return $this->belongsToMany(User::class);
    }

    public function user(){
        return$this->belongsTo(User::class);
    }
}
