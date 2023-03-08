<?php

namespace App\Console\Commands;

use App\Mail\RenewAlert;
use Illuminate\Console\Command;
use App\Models\License;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class RenewLicense extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Renew-License:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Renew License';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = date('Y-m-d');
        $coming_two_week = date('Y-m-d', strtotime($date. '+14 days'));
        $licenses = License::with('get_license_user')->where('renew_date',$coming_two_week)->where('renew_alert',1)->get();
        foreach($licenses as $license)
        {
            $user_email = $license->get_license_user->email;
            $details = [
                'renew_date' => $license->renew_date,
                'title' => $license->title,
                'key' =>  $license->key,
            ];
            Mail::to($user_email)->send(new RenewAlert($details));
        }
        Log::info("Cronjob is working fine renew alert sent!");

        // return Command::SUCCESS;
    }
}
