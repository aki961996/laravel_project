<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;
    protected $primaryKey = 'borrower_id';
    protected $table = 'borrowers';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'msg',
        'teams'
    ];
}
