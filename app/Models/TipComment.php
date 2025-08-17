<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipComment extends Model
{
   protected $fillable = [
        'tip_id',
        'user_id',
        'comment',
    ];

    public function tip() {
        return $this->belongsTo(Tip::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
