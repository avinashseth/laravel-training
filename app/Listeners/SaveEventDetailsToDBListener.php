<?php

namespace App\Listeners;

use App\Events\UserCommentedOnYourPhotoEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Notification;
use Illuminate\Support\Facades\Artisan;


class SaveEventDetailsToDBListener
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
     * @param  \App\Events\UserCommentedOnYourPhotoEvent  $event
     * @return void
     */
    public function handle(UserCommentedOnYourPhotoEvent $event)
    {
        // $message = $event->request->username . ' commented on your photo';
        // $notification = new Notification;
        // $notification->user_id = rand(1000,9999);
        // $notification->notification_text = $message;
        // $notification->save();
        // Artisan::command('inspire', function () {
        //     $this->comment(Inspiring::quote());
        // })->purpose('Display an inspiring quote');
        \Storage::prepend('file.log', 'Prepended Text');
        \Storage::append('file.log', 'Appended Text');
    }
}
