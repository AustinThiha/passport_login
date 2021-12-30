<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

// Personal access client created successfully.
// Client ID: 953ba0d1-8baa-4819-8488-cd7cec574506
// Client secret: aekvx8ljoi09b9NT6RaZXkjIctOwiy6dIWLTadV7
// Password grant client created successfully.
// Client ID: 953ba0d1-9033-4d6b-b57b-86f2bd42c994
// Client secret: RHthPVy6CDOjQSjFcDEDPMXA71quZ4CLzRbViUHC
