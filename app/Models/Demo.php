<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Demo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'demos';
    protected $fillable = [
        'bbbb_name',
        'email_address',
        'address'

    ];
    //accesser
    public function getBbbbNameAttribute($value)
    {
        return strtoupper($value);
    }
    // protected function getBbbbNameAttribute(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => ucfirst($value),
    //     );
    // }
    //this is accesser
    public function getAddressAttribute($value)
    {
        return strtoupper($value);

        // return Attribute::make(
        //     get: fn (string  strtoupper($value)) => strtoupper($value),
        // );
    }

    //mutetor emailData

    public function setEmailAddressAttribute($value)
    {
        $this->attributes['email_address'] = strtoupper($value);
    }
}
