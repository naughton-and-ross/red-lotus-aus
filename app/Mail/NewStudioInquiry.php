<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewStudioInquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($details)
  {
      $this->details = $details;
      $this->catagory = "studio";
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
      return $this->view('mail.form')
                  ->with([
                      'catagory' => "studio"
                  ]);
  }
}
