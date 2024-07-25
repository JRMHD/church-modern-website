<?php

namespace App\Mail;

use App\Models\PrayerRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PrayerRequestSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $prayerRequest;

    public function __construct(PrayerRequest $prayerRequest)
    {
        $this->prayerRequest = $prayerRequest;
    }

    public function build()
    {
        return $this->view('emails.prayer-request-submission')
            ->subject('New Prayer Request from ' . $this->prayerRequest->fullname);
    }
}
