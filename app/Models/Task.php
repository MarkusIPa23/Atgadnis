<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    'title',
    'due_date',
    'is_favorite',
    'is_completed',
    'user_id',
];
}