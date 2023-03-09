<?php

namespace App\Http\Controllers;

use App\Models\Connect;
use App\Models\setsession;
use App\Models\Subsciption;
use App\Models\Transaction;
use App\Models\User;
use App\Services\PaymentDeduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Redirect;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function change_subscribe($id)
    {


        $user = User::find(Auth::user()->id);
        $user->package_id = $id;
        $user->save();


        $paymet = new PaymentDeduct();
        $res = $paymet->payment($user);

        if ($res) {

            return back()->with('success', 'Successfully Subscribed Continue To Login');
        } else {
            return back()->with('error', 'Something went wrong');
        }


    }

    public function subscribe(Request $request)
    {

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $token = $stripe->tokens->create([

            'card' => [
                'number' => $request->card_number,
                'exp_month' => $request->card_expiry_month,
                'exp_year' => $request->card_expiry_year,
                'cvc' => $request->card_cvc,
            ]
        ]);

        $stripe = \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = \Stripe\Customer::create([
            'source' => $token->id,
        ]);


        $user = User::find(Auth::user()->id);
        $user->package_id = $request->input('pack_id');
        $user->stripe_id = $customer->id;
        $user->save();


        $paymet = new PaymentDeduct();
        $res = $paymet->payment($user);
        if ($res) {

            return back()->with('success', 'Successfully Subscribed Continue To Login');
        } else {
            return back()->with('error', 'Something went wrong');
        }

    }


    public function subscribe_user(Request $request)
    {

        $time = date("Y-m-d");
        $next_payment = date("Y-m-d", strtotime("+3 month"));
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $token= $stripe->tokens->create([
            'card' => [
                'number' => $request->card_number,
                'exp_month' => $request->card_expiry_month,
                'exp_year' => $request->card_expiry_year,
                'cvc' => $request->card_cvc,
            ]
        ]);
        $stripe= \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = \Stripe\Customer::create([
            'source' => $token->id,
        ]);
        $user=User::find(Auth::user()->id);
        $user->package_id=$request->input('pack_id');
        $user->stripe_id=$customer->id;
        $user->next_payment=$next_payment;
        $user->active=1;
        $user->pass=null;
        $user->is_verified=3;
        $user->save();
        $trans= new Transaction();
        $trans->package_id = $request->pack_id;
        $trans->user_id = Auth::user()->id;
        $trans->receipt_url = $customer->receipt_url;
        $trans->transactions_id = $customer->id;
        $trans->amount= $request->amount;
        $trans->save();
        Auth::logout();
        Session::flush();
        return redirect()->route('login')->with('success','Successfully Registered Continue To Login');
    }

    public function Refund(Request $request, $id)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        if ($id != null) {
            $data = $stripe->refunds->create([
                'charge' => $id,
            ]);

            $user = Subsciption::where('stripe_refund_id', $id)->first();
            $ref = Subsciption::find($user->id);
            $ref->refund_status = 1;
            $ref->update();
            return response()->json(['success' => true, 'data' => $data]);

        }
        return response()->json(['success' => $request->input('refund')]);

    }

}
