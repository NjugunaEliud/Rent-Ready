<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number'];
    public function favoriteProperties()
{
    return $this->belongsToMany(Property::class, 'favorites');
}

public function inquiries()
{
    return $this->belongsToMany(Availability::class, 'tenant_inquiries');
}


}
