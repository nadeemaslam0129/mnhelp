<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateModel extends Model
{
    use HasFactory;
    protected $table='tv_date';
    public function getTimes(){
        return $this->hasMany(TimeModel::class,'tv_date_id');
    }
}
