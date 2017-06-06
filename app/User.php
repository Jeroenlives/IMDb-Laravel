<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'firstname', 'lastname', 'insertion', 'email', 'password'
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
     * @return bool
     */
    public function isAdmin()
    {
        if(Auth::check()) {
            $roles = Auth::user()->roles()->pluck('name')->toArray();
            return in_array('admin', $roles);
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isModerator()
    {
        if(Auth::check()) {
            $roles = Auth::user()->roles()->pluck('name')->toArray();
            return in_array('admin', $roles) || in_array('moderator', $roles);
        }

        return false;
    }

    /**
     * @return BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
