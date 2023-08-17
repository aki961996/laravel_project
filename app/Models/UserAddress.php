<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_addresses_id';
    protected $table = 'user_addresses';
    protected $fillable = [
        'user_id',
        'address_line_1',
        'city',
        'post_code',
        'state',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
