<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'budget',
        'deadline',
        'status',
    ];

    protected function casts()
    {
        return [
            'deadline' => 'timestamp',
        ];
    }
}
