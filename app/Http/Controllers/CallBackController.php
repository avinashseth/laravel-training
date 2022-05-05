<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\User;
use App\Notifications\RequestCallBackNotification;
use App\Notifications\PaymentDeclined;
use Notification;

class CallBackController extends Controller
{
    function requestCallBack(Request $request)
    {
        $user = User::first();
        $random = Carbon::today()->addDays(rand(1, 30));
        $details = [
                    'greeting' => 'Hi Avinash',
                    'body' => 'Rohan has requested a callback request @ ' . $random,
                    'thanks' => 'You can always check callback request from your profile page',
                    'actionText' => 'Check Details',
                    'actionURL' => url('/check-details'),
                    'user_id' => 101,
                    'callback_date_time' => $random
                ];
        Notification::send($user, new RequestCallBackNotification($details));
        // Notification::send($user, new PaymentDeclined());
    }

    function getNotifications(Request $request) {
        $user = \App\Models\User::find(1); // 1 is user id of User Model
        // fetch all notifications
        // foreach ($user->notifications as $notification) {
        //     echo '<p>' . $notification->type . '</p>';
        // }
        // fetch all unread notifications
        // foreach ($user->unreadNotifications as $notification) {
        //     echo '<pre>' , print_r($notification) , '</pre>';
        // }
        // marking notifications as read
        // foreach ($user->unreadNotifications as $notification) {
        //     $notification->markAsRead();
        // }

    }

}
