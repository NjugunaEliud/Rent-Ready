<?php

namespace App\Models;
use App\Models\Landlord;
use App\Models\Tenants;
use App\Models\Availability;
use App\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = ['property_name','address','property_type','rent_cost','description','landlord_id','image_id',
    ];
    public function tenants()
{
    return $this->belongsToMany(Tenant::class, 'favorites');
}
public function landlord()
{
    return $this->belongsTo(Landlord::class);
}

public function availabilities()
{
    return $this->hasMany(Availability::class);
}
public function images()
{
    return $this->hasMany(Image::class);
}



}
