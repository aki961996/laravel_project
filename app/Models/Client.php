<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'client_id';

    protected $table = 'clients';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'Street',
        'apartment',
        'city',
        'State',
        'zip_code',
        'status'
    ];
    //only active
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function postcode()
    {
        return $this->hasMany(UserAddress::class, 'user_id', 'client_id');
    }
}
