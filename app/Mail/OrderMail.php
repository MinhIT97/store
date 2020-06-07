<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cart_items;

    public $total;
    public function __construct($cart_items, $total)
    {
        $this->cart_items = $cart_items;
        $this->total = $total;
    }

    public function build()
    {
        return $this->view('mail.order-mail');
    }
}
