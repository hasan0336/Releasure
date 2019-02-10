<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\Billable;
use Braintree_Configuration;
use Braintree;
use Auth;
class PurchaseController extends Controller
{
    public function hosted()
    {
	    $gateway = new Braintree\Gateway([
	        'environment' => config('services.braintree.environment'),
	        'merchantId' => 'wyj8zg78h24csmdy',
	        'publicKey' => 'tkbm8cfzj66thgjs',
	        'privateKey' => '01843636837d3d895354e1636eae84d5'
	    ]);
	    $token = $gateway->ClientToken()->generate();
	    return view('hosted', [
	        'token' => $token
	    ]);
	}

	public function checkout(Request $request)
	{
	    $gateway = new Braintree\Gateway([
	        'environment' => config('services.braintree.environment'),
	        'merchantId' => config('services.braintree.merchantId'),
	        'publicKey' => config('services.braintree.publicKey'),
	        'privateKey' => config('services.braintree.privateKey')
	    ]);
	    $amount = $request->amount;
	    $nonce = $request->payment_method_nonce;
	    $result = $gateway->transaction()->sale([
	        'amount' => $amount,
	        'paymentMethodNonce' => $nonce,
	        'customer' => [
	            'firstName' => Auth::user()->name,
	            'email' => Auth::user()->email
	        ],
	        'options' => [
	            'submitForSettlement' => true
	        ]
	    ]);
	    if ($result->success)
	    {
	        $transaction = $result->transaction;
	        // header("Location: transaction.php?id=" . $transaction->id);
	        return back()->with('success_message', 'Transaction successful. The ID is:'. $transaction->id);
	    }
	    else
	    {
	        $errorString = "";
	        foreach ($result->errors->deepAll() as $error)
	        {
	            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
	        }
	        // $_SESSION["errors"] = $errorString;
	        // header("Location: index.php");
	        return back()->withErrors('An error occurred with the message: '.$result->message);
	    }
	}
}
