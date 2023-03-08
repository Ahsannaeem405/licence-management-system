<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Department;

class License extends Model
{  use HasFactory;
    protected $table = 'licenses';
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id','id');
    }
    public function customer()
    {
        return $this->belongsTo(User::class,'customer_id','id');
    }
    public function get_license_user()
    {
        return $this->belongsTo(User::class,'reffer_to','id');
    }
}
