<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{  use HasFactory;
    protected $guarded = [];

    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
  
  
}
