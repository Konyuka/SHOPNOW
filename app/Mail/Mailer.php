<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    
    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->subject($this->details['subject'])
                    ->view('emails.myTestMail')
                    ->from($this->details['from'], $this->details['from']);

        return $this->view('view.name');
    }
    
}

class adminMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $vendorDetails;
    
    public function __construct($vendorDetails)
    {
        $this->details = $vendorDetails;
    }

    public function build()
    {
        return $this->subject($this->details['emailSubject'])
                    ->view('emails.myTestMail')
                    ->from($this->details['newOrder'], $this->details['newOrder']);

        return $this->view('view.name');
    }
}
