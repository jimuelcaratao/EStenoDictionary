<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $table = 'words';
    protected $primaryKey = 'word_id';

    protected $fillable = [
        'category_name',
        'word_name',
        'description',
        'status',
        'default_video',
        'default_photo',
        'photo_1',
        'photo_2',
        'viewers',
        'spelling',
    ];
}
