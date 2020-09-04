<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Order_Tour;
class TourMail extends Mailable
{
    use Queueable, SerializesModels;
    public $orderTours;
    public $orderdetail =[];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(orderTours $orderTours,$orderdetail )
    {
        $this->orderdetail = $orderdetail;
        $this->orderTours = $orderTours;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.mailorder');
    }
}
