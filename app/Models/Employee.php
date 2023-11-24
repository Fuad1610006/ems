<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasMany(Employee::class);
    }
    public function designation()
    {
        return $this->hasMany(Employee::class);
    }
    public function role()
    {
        return $this->hasMany(Employee::class);
    }
}