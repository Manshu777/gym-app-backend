<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    protected $fillable = [
        'trainer_id',
        'title',
        'content',
    ];

    public function trainer() {
        return $this->belongsTo(User::class, 'trainer_id');
    }

    public function comments() {
        return $this->hasMany(TipComment::class);
    }
}
