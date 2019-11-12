<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Jobs\SendWelcomeMail;

class QueueController extends Controller
{
    //
	public function sendEmail()
	{
		$emailJob = (new SendWelcomeMail("Lin Maung"))->delay(Carbon::now()->addSeconds(3));
		dispatch($emailJob);
		
		echo "Mail Sent";
	}
}
