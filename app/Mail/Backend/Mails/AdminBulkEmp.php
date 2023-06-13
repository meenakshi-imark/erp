<?php

namespace App\Mail\Backend\Mails;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminBulkEmp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->to(config('mail.from.address'), config('mail.from.name'))
			->view('backend.auth.mails.addemployeebulk')
            ->text('backend.auth.mails.addemployeebulk-text')
            ->subject(__('New Registration mail', ['app_name' => app_name()]));
    }
}
