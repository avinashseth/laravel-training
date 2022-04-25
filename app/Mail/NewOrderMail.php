<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $orderDetails = [];

    public function __construct($orderDetails)
    {
        $this->orderDetails = $orderDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.new-order')
            ->from('bill@microsoft.com')
            ->subject('Order Placed #' . $this->orderDetails['order_number'])
            ->cc('bloggerbeg@gmail.com')
            ->attach('https://oesrmb.stripocdn.email/content/guids/CABINET_9df86e5b6c53dd0319931e2447ed854b/images/64951510234941531.png')
            ->with([
                'order_number' => $this->orderDetails['order_number']
            ]);
    }
}
