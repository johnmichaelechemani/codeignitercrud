<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'task'; // Optional, if your table is named 'tasks'

    // Specify the fillable fields
    protected $fillable = [
        'name',

    ];
}