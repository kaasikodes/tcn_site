<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'summary',
        'content',
        'user_id',
        'belong_to'
    ];
}