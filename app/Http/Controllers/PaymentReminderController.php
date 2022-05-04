<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\PaymentReminderMailJob;
use App\Mail\PaymentDueReminderMail;

class PaymentReminderController extends Controller
{
    public function enqueue(Request $request)
    {
        // $details = ['email' => 'avinash.seth@outlook.com', 'name'=>'Avinash Seth', 'amount'=>rand(1000,9999)];
        // PaymentReminderMailJob::dispatch($details);
        $details = ['email' => 'avinash' . rand(10,99) . '@outlook.com', 'name'=>'Avinash Seth', 'amount'=>rand(1000,9999)];
        $emailJob = (new PaymentReminderMailJob($details))->delay(\Carbon\Carbon::now()->addSeconds(5));
        dispatch($emailJob);
        // echo "Email Sent " . \Carbon\Carbon::now();
    }
}
