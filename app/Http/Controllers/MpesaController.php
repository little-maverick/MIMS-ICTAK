<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use App\Models\User;

use App\Models\registration;

class MpesaController extends Controller
{


 
    public function showMpesa()
        {
            return view('payment');
        }

    public function generateAccessToken()
    {

        $consumer_key = 'eX9ShJGE5GaRjnnaAXnNidNgTIQZWwgA';
        $consumer_secret = 'Y6fiQDPFlQAlAeMs';
        $credentials = base64_encode('$consumer_key.":".$consumer_secret');
        //Access token url
        $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $header = ['content-type:application/json; charset=utf8'];
        $curl = curl_init($access_token_url);
        curl_setopt($curl, $CURLOPT_URL, $url);
        
        curl_setopt($curl, $CURLOPT_HTTPHEADER, array('Authorization: Bearer cFJZcjZ6anEwaThMMXp6d1FETUxwWkIzeVBDa2hNc2M6UmYyMkJmWm9nMHFRR2xWOQ=='));
        
        curl_setopt($curl, $CURLOPT_HEADER, false);
        curl_setopt($curl, $CURLOPT_VERIFYPEER, false);
        curl_setopt($curl, $CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, $CURLOPT_USERPWD, $consumer_key . ':' . $consumer_secret);

        $result = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        echo $results;
        $result = json_decode($result);
        echo $access_token = $result->access_token;
        curl_close($curl);
    }

    public function STKPush()
    {
        date_default_timezone_set('Africa/Nairobi');
        $processrequestUrl = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $BusinessShortCode = 174379;
        $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $Timestamp  Carbon::rawParse('now')->(YmdHms);

        //ENCRYPT DATA TO GET PASSWORD
        $Password = base64_encode($BusinessShortCode.$passkey.$Timestamp);
        $TransAmount = 1;
        $PartyA = 254714274534;
        $PartyB = 174379;
        $AccountReference = 'ICTAK';
        $TransactionDesc = 'STKPush test';
        $callbackURL = '';
        $stkpushheader = ['Content-Type: application/json', 'Authorization: Bearer' $access_token];

        //INITIATING CURL
       
        $curl = curl_init();
         curl_setopt($curl, $CURLOPT_HTTPHEADER, $stkpushheader);
        curl_setopt($curl, $CURLOPT_URL, $processrequestUrl);
        $curl_post_data = array(
            //Fill in the request with valid values
               'TransactionType' => 'CustomerPayBillOnline',
               "Timestamp" => $TimeStamp,
               "TransAmount": $TransAmount,
               "BusinessShortCode": $BusinessShortCode,
               "Password" => $Password,
               "PartyA" => $PartyA,
               "PartyB"=> $PartyB,
               "PhoneNumber" => $PartyA,
               "CallBackURL" => $callbackURL,
               "AccountReference"=> $AccountReference,
               "TransactionDesc"=> $TransactionDesc
        );

        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, $CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, $CURLOPT_POST, true);
        curl_setopt($curl, $CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        //echo response

        echo $curl_response;

    }
}
