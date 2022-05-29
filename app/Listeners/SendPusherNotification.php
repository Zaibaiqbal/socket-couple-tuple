<?php

namespace App\Listeners;

use App\Events\NotificationPusher;
use App\Models\NotificationPusher as ModelsNotificationPusher;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPusherNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NotificationPusher  $event
     * @return void
     */
    public function handle(NotificationPusher $event)
    {
        // SET PUSHER CONFIGURATIONS
        $pusher = new \Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            config('broadcasting.connections.pusher.options')
        );
        // END PUSHER CONFIGURATION

        // STORE PUSER NOTIFICATION IN OUR SYSTEM
        if(@count($event->to_users) > 0)
        {
            $notify = new ModelsNotificationPusher;

            $notify = $notify->storeNotification($event);

            $pusher->trigger( 'my-channel', 'my-event', $notify->to_user_id);
        }
        

    }
}
