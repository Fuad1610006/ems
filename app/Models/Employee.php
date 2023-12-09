<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

     public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

     public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

     public function resignation()
    {
        return $this->belongsTo(Resignation::class);
    }

     public function termination()
    {
        return $this->belongsTo(Termination::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function leave()
    {
        return $this->hasMany(Leave::class);
    }

    public function overtime()
    {
        return $this->hasMany(Overtime::class);
    }

    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
}
