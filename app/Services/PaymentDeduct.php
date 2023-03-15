<?php

namespace App\Services;

use App\Models\Package;
use App\Models\Transaction;
use App\Models\User;

class PaymentDeduct
{
    public function payment($user)
    {


        $get_user = User::find($user->id);

        $Package = Package::find($get_user->package_id);

        try {

            if ($get_user->package_id != 1) {


                \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                $charge = \Stripe\Charge::create([
                    'amount' => $Package->price * 100, // $15.00 this time
                    'currency' => 'usd',
                    'customer' => $get_user->stripe_id, // Previously stored, then retrieved
                ]);
            }


            $next_date_payment = date("Y-m-d", strtotime("+1 month"));

            $update = User::find($get_user->id);
            $update->next_payment = $next_date_payment;
            $user->active = 1;
            $user->pass = null;
            $user->update();


            $trans = new Transaction();
            $trans->package_id = $get_user->package_id;
            $trans->user_id = $get_user->id;
//            $trans->receipt_url = $charge->receipt_url;
//            $trans->transactions_id = $charge->id;
            $trans->amount = $Package->price;
            $trans->save();
            \Log::info($next_date_payment);
            \Log::info($user);

            return true;


        } catch (\Exception $e) {
            \Log::info($e);

            $update = User::find($get_user->id);
            $user->active = null;
            $user->stripe_id = null;
            $user->pass = 1;
            $user->update();


            return  false;


        }
    }
}
