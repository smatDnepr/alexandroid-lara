<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

	public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->from('matyushkin.dp.ua@gmail.com')
					->subject('Заявка с сайта ' . env('APP_URL'))
					->view('emails.contact')
					->with([
						'username' => $this->data['username'],
						'phone'    => $this->data['phone'],
						'mess'     => nl2br($this->data['mess']),
					  ]);
    }
}
