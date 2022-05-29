<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotificationPusher;
use Auth;

class NotificationPusherController extends Controller
{
   
    public function loadNotifications(Request $request)
    {
        $data = ['notify_counts' => 0, 'notify_body' => ''];

        if($request->ajax())
        {
            $notify = new NotificationPusher;

            $notify_list = $notify->getUserNotification();

            $data['notify_body'] = view('notifications.notify',[

                'notify_list' => $notify_list,

            ])->render();

            $data['notify_counts'] = $notify_list->count();
        }

        return $data;
    }

    public function seenNotification(Request $request)
    {
        $data = ['notify_counts' => 0, 'notify_body' => ''];

        try{

            if($request->ajax())
            {
                $notify = new NotificationPusher;

                $notify->updateNotificationSeen(decrypt($request->id));

                $data = $this->loadNotifications($request);
            }
        }
        catch (DecryptException $e) 
        {

        }
        return $data;
    }

    public function appearNotification(Request $request)
    {
        $notify = new NotificationPusher;

        $notify->updateNotificationAppear();
    }
}
