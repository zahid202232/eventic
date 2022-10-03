<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details,$participant_token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$participant_token)
    {
        $this->details = $details;
        $this->details = $participant_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail for Event')
                    ->view('mail.event');
    }
}
