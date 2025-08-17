<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable,HasApiTokens;

   
    
     protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function trainerProfile() {
        return $this->hasOne(TrainerProfile::class);
    }

    public function bookingsAsUser() {
        return $this->hasMany(Booking::class, 'user_id');
    }

    public function bookingsAsTrainer() {
        return $this->hasMany(Booking::class, 'trainer_id');
    }

    public function tips() {
        return $this->hasMany(Tip::class, 'trainer_id');
    }

    public function tipComments() {
        return $this->hasMany(TipComment::class);
    }

    public function messagesSent() {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messagesReceived() {
        return $this->hasMany(Message::class, 'receiver_id');
    }
}
