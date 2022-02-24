<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPrefer extends Model
{
    use HasFactory;

    protected $table = 'users_preferences';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'category_name',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
