<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\ExpiryAlert;
use App\Models\License;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ExpiryLicense extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Expiry-License:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expiry License';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = date('Y-m-d');
        $coming_two_week = date('Y-m-d', strtotime($date. '+14 days'));
        $licenses = License::with('get_license_user')->where('date_of_expiry',$coming_two_week)->where('expiry_alert',1)->get();
        foreach($licenses as $license)
        {
            $user_email = $license->get_license_user->email;
            $details = [
                'date_of_expiry' => $license->date_of_expiry,
                'title' => $license->title,
                'key' =>  $license->key,
            ];
            Mail::to($user_email)->send(new ExpiryAlert($details));
        }
        Log::info("Cronjob is working fine expiry alert sent!");
        // return Command::SUCCESS;
    }
}
