<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\CommonMethods;
use App\Services\Interfaces\PaymentServiceInterface as PaymentService;


class PayPalController extends Controller
{
    protected $paymentService;
    public function __construct(
        PaymentService $bookingService
    ) {

        $this->paymentService = $bookingService;
    }
    public function createTransaction()
    {
        return view('frontend.paypal.test');
    }


    // public function processTransaction(Request $request)
    // {
    //     $provider = new PayPalClient;
    //     $provider->setApiCredentials(config('paypal'));
    //     $paypalToken = $provider->getAccessToken();

    //     $response = $provider->createOrder([
    //         "intent" => "CAPTURE",
    //         "application_context" => [
    //             "return_url" => route('successTransaction'),
    //             "cancel_url" => route('cancelTransaction'), // Fixed route name
    //         ],
    //         "purchase_units" => [
    //             [
    //                 "amount" => [
    //                     "currency_code" => "USD",
    //                     "value" => "5.00"
    //                 ]
    //             ]
    //         ]
    //     ]);

    //     if (isset($response['id']) && $response['id'] != null) {
    //         // Redirect to approval link
    //         foreach ($response['links'] as $link) {
    //             if ($link['rel'] === 'approve') {
    //                 return redirect()->away($link['href']);
    //             }
    //         }

    //         return redirect()
    //             ->route('order', ['id' => 1])
    //             ->with('error', 'Something went wrong.');
    //     } else {
    //         return redirect()
    //             ->route('order', ['id' => 1])
    //             ->with('error', 'Something went wrong.');
    //     }
    // }
    public function processPaypPal(Request $request)
    {

        $data = session('checkout_data');
        $amount = $data['down_payment'];

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        if (!$amount || !is_numeric($amount)) {
            return redirect()
                ->route('order', ['id' => 1])
                ->with('error', 'Invalid amount.');
        }

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'), // Fixed route name
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $amount
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            // Redirect to approval link
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
            session()->flush();
            return redirect()
                ->route('order', ['id' => session('id')])
                ->with('error', 'Something went wrong.');
        } else {

            session()->flush();
            return redirect()
                ->route('order', ['id' => session('id')])
                ->with('error', 'Something went wrong.');
        }
    }

    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] === 'COMPLETED') {
            $this->paymentService->setStatusById(session('id'),1);
            return redirect()
                ->route('paymentSuccess')
                ->with('success', 'Transaction complete.');
        } else {
            session()->flush();
            return redirect()
                ->route('order', ['id' => session('id')])
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }


    public function cancelTransaction(Request $request)
    {
        $this->paymentService->setStatusById(session('id'),2);

        session()->flush();
        return redirect()->route('order', ['id' => 1])->with('error', 'You have canceled the transaction.');
    }
}
