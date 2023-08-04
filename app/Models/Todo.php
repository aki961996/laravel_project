<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $primaryKey = 'todo_id';
    protected $table = 'todos';
    protected $fillable = [
        'image',
        'team_member',
        'task',
        'priority'
    ];
    
}
