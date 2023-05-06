<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterPaymentController extends Controller
{



    public function getPaymentChannel(){

        $apiKey = env('TRIPAY_KEY');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_FRESH_CONNECT  => true,
        // CURLOPT_URL            => 'https://tripay.co.id/api/merchant/payment-channel',
        CURLOPT_URL            => env('TRIPAY_URL'),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_FAILONERROR    => false,
        CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);


        // dd (json_decode($response)->data);

        $channels = json_decode($response)->data;


        return view ('student.payment-channel',['channels'=>$channels]);
       
        
    }
}
