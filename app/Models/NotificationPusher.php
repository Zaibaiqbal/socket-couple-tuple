<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class NotificationPusher extends Model
{
  
    protected $casts = [
        'to_user_id' => 'array'
    ];

    protected $hidden = [

        'updated_at'
    ];

    public function __construct()
    {
        date_default_timezone_set("Asia/Karachi");
    }

    public function storeNotification($event)
    {   
        return DB::transaction(function() use ($event){

            $notify = new NotificationPusher;

            $notify->from_user_id = $event->from_user;
            $notify->to_user_id   = $event->to_users;
            $notify->route        = $event->route;
            $notify->params       = $event->params; // JUST ONE ID
            $notify->type         = $event->type; 
            $notify->message      = $event->message; 

            $notify->save();

            return with($notify);

        });
    }

    public function getUserNotification()
    {
        return NotificationPusher::where('is_seen',0)->whereJsonContains('to_user_id',Auth::user()->id)->orderBy('id','desc')->take(50)->get();
    }


    public function updateNotificationSeen($id)
    {
        return NotificationPusher::where('id',$id)->update(['is_seen' => 1]);
    }

    public function updateNotificationAppear()
    {
        return NotificationPusher::where('is_appear',0)->whereJsonContains('to_user_id',Auth::user()->id)->update(['is_appear' => 1]);
    }
}
