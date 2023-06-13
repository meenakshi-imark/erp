<?php

namespace App\Mail\Backend\Mails;

use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminBulkAdd extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	protected $importData;
    public function __construct($importData)
    { 

	 $this->importData = $importData;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Company $importData)
    {
		$company =  $this->importData;
		return $this->to(config('mail.from.address'), config('mail.from.name'))
			->view('backend.auth.mails.adminbulkadd')->with('company', $company)
            ->text('backend.auth.mails.adminbulkadd-text')
            ->subject(__('Registration Mail', ['app_name' => app_name()]));
    }
}
