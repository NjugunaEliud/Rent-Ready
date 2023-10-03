<?php

namespace App\Models;
use App\Models\Tenant;
use App\Models\Property;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;
    public function tenants()
{
    return $this->belongsToMany(Tenant::class, 'tenant_inquiries');
}
public function property()
{
    return $this->belongsTo(Property::class);
}

}
