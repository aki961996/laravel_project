<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use HasFactory;
    protected $primaryKey = 'order_id';
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'price',
        'status',

    ];
    //appending evide condition und bcs 2 ans varam
    public function getStatusTextAttribute()
    {
        if ($this->status == 1) return 'Placed';
        else return 'Deliverd';
    }
    



    protected $appends = ['status_text'];
}
