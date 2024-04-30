<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'title', 'description', 'start_date', 'end_date', 'category'
    ];

    protected $casts = [
        'category' => 'array'
    ];


}
