<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PackageDetail;
class Package extends Model
{   
    use HasFactory;
    protected $table = 'packages';
    protected $guarded = [];

    public function package_details()
    {
        return $this->hasMany(PackageDetail::class,'package_id','id');
    }
}
