<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'description',
        'tags',
        'date_found',
        'found',
        'closed',
        'user_id',
        'image'
    ];
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
