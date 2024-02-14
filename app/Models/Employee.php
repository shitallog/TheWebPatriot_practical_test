<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_of_birth',
        'date_of_joining',
        'gender',
        'designation',
        'manager',
        'employee_picture',
        'email',
        'password',
       
        
    ];
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
    
}
