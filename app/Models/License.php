<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    use HasFactory;
}
