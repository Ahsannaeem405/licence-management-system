<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\PaymentDeduct;

use App\Models\User;

class PaymentCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = date("Y-m-d");
        $user=User::whereDate('next_payment',$date)->whereNull('pass')->get();
        foreach($user as $row)
        {
            
            $add=new PaymentDeduct();
            $add->payment($row);
        }
        return Command::SUCCESS;
    }
}
