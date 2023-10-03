<?php

namespace App\Models;
use App\Models\Property;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'address'];
    public function properties(){
        return $this->hasMany(Property::class);
    }
}
