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
        'images',
        'team_member',
        'task',
        'priority'
    ];

    public function getData()
    {
        $select = [
            'priority',
            'task',
            'team_member'


        ];
        // return $select;
        $b = [

            "high priority"

        ];
        $a = [
            'ada',
            'demo'
        ];
        // return $b;
        $w = $this->select($select)
            ->where('priority', $b)
            ->whereIn('team_member', $a)
            ->get();

        return $w;
        //   dd($this->getLastQuery());
    }

    // public function scopeActive($query)
    // {
    //     return $query->where('priority', 'high priority');
    // }
}
