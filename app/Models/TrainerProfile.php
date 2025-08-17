<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainerProfile extends Model
{
      protected $fillable = [
        'user_id',
        'dob',
        'address',
        'city',
        'about_me',
        'certifications',
        'awards',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
