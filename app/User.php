<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Traits\FileSystem;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'birthday', 'email', 'password', 'avatar', 'phone', 'nickname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\UserRole');
    }

    public static function userUpdateProfile($data)
    {
        return self::whereId(auth()->user()->id)->update($data);
    }

    public static function userUpdatePassword($data)
    {
        return self::whereId(auth()->user()->id)->update(['password' => bcrypt($data['password'])]);
    }

    public static function userUpdateAvatar($data)
    {
            $image = FileSystem::makeImageFromBase64($data['avatar']);
            $avatar = FileSystem::updateImage($image, 'images.users', auth()->user()->avatar);

            return User::whereId(auth()->user()->id)->update(['avatar' => $avatar]);
    }
}
