<?php

namespace App\Http\Controllers;




class MpesaController extends Controller
{


 
     public function showPaymentPage()
    {
        return view('payment');
    }

    public function stk()
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode = 174379;
        $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = '1';
        $PartyA = '254714274534'; 
        $PartyB = '174379';
        $PhoneNumber = '254714274534'; 
        $CallBackURL = '';
        $AccountReference = 'ICTAK MEMBERSHIP'; 
        $TransactionDesc = 'STKPush test';
        $Remarks = 'Membership payment Done!';

        $stkPushSimulation=$mpesa->STKPushSimulation(
        $BusinessShortCode, 
        $passkey, 
        $TransactionType, 
        $Amount, 
        $PartyA, 
        $PartyB, 
        $PhoneNumber, 
        $CallBackURL, 
        $AccountReference, 
        $TransactionDesc, 
        $Remarks);

        dd($stkPushSimulation);
    }


}
