<?php

namespace App\Mail\Backend\Mails;

use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class AdminDeleteCompany extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @var \App\Models\Company
     */
	protected $company;
    public function __construct($company)
    { 
	
	 $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Company $company)
    { 
	$company =  $this->company;
	
        return $this->to(config('mail.from.address'), config('mail.from.name'))
			->view('backend.auth.mails.admindeluser')->with('company', $company[0])
            ->text('backend.auth.mails.admindeluser-text')
            ->subject(__('Delete Company', ['app_name' => app_name()]));
    }
}
