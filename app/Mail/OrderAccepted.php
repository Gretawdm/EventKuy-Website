<?php

namespace App\Mail;

use App\Models\Tenant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct(Tenant $order)
    {
        $this->order = $order;
    }

    public function build()
    {
        $booth = $this->order->booth;
        $event = $booth->event;

        return $this->subject('Pemesanan Booth Anda Telah Diterima')
                    ->view('emails.orderAccepted', [
                        'name' => $this->order->user->nama_lengkap,
                        'booth_name' => $booth->nama_booth,
                        'booth_type' => $booth->tipe_booth,
                        'event_name' => $event->nama_event,
                    ]);
    }
}