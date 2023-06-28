<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $mail_template = 'mail.forget';
    public $details = array();
    public function __construct($details,$template='')
    {
        if(!empty($template))
        {
            $this->mail_template = $template;
        }
        if(!empty($details))
        {
            $this->details = $details;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view($this->mail_template,compact('details'));
    }
}
