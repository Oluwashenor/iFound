<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'message',
        'sender_id',
        'item_id',
        'receiver_id'
    ];
    use HasFactory;

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function getSenderNameAttribute()
    {
        return ucfirst($this->sender->name);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
