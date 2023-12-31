<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function designation()
    {
        return $this->hasMany(Designation::class);
    }
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
