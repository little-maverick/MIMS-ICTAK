<?php
// header('content-type: application/json');

// $stkCallbackResponse = file_get_contents('http://127.0.0.1:8000/redirects');
// $logFile = "Mpesastkresponse.json";
// $log = fopen($logFile, 'a');
// fwrite($log, $stkCallbackResponse);
// fclose($log);

// $data = json_encode($stkCallbackResponse);

// $MerchantRequestID = $data->Body->stkCallback->$MerchantRequestID;
// $CheckoutRequestID = $data->Body->stkCallback->$CheckoutRequestID;
// $ResultCode = $data->Body->stkCallback->$ResultCode;
// $Amount = $data->Body->stkCallback->$CallbackMetadata->Item[0]->value;
// $TransactionId = $data->Body->stkCallback->$CallbackMetadata->Item[1]->value;
// $UserPhoneNumber = $data->Body->stkCallback->$CallbackMetadata->Item[3]->value;

//check if the transaction was successful

// if($ResultCode == 0){
// 	//store transaction details into the database
// }
