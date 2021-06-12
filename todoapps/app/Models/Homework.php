<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    protected $primaryKey = 'task_id';
    protected $fillable = ['task_name'];
    public $timestamps = false;
}
