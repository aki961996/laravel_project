<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use function PHPUnit\Framework\returnSelf;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'user_id';
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    //scop
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }


    // accser
    public function getDateOfBirthAttribute($value)  //camel case ezhuthicha date of birth denote cheyum
    {
        return date('d-m-Y', strtotime($value));
    }

    //appending

    public function getStatusTextAttribute()
    {
        if ($this->status == 1) return 'Active';
        else return 'Inactive';
    }


    //etth  oru coulum koodey add akal ann
    public function getDateOfBirthFormatedAttribute()
    {
        return date('d-m-Y', strtotime($this->date_of_birth));
    }

    protected $appends = ['date_of_birth_formated', 'status_text'];
}
