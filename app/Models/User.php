<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use NotificationChannels\WebPush\HasPushSubscriptions;
use Laravel\Sanctum\HasApiTokens;
use Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasPushSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'profile_for',
        'first_name',
        'last_name',
        'dob',
        'gender',
        'religion',
        'community',
        'living_in',
        'email',
        'password',
        'last_seen'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserById($id)
    {
        return User::where('id' , $id)->first();
    }

    public function getUserProfiles()
    {
        return User::join('profiles','users.id' ,'profiles.user_id')
        ->select('profiles.id as profile_id','users.id as user_id','users.first_name','users.last_name','profiles.city_live','users.dob','profiles.material_status','users.religion','users.community','profiles.sub_community')
        ->where('users.id' ,'!=', Auth::user()->id)
        ->get();
    }
    public function getUserImages($id)
    {
        return Image::where('user_id',$id)->orderby('id','desc')->first();
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function profileViews(){

        return $this->hasMany(ProfileView::class, 'profile_id');
    }
}
