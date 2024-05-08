<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'test_id',
        'quest_nr',
        'image',
        'question',
        'answer',
        'choices',
        'points',
    ];
}
