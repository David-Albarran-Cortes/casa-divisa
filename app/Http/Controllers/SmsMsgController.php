<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 

 
class SmsMsgController extends Controller
{
    public function sendSmsToMobile()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('f953a4cc', 'bC04PPzvK5amQrUS');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '573234306114',
            'from' => 'Casadivisa',
            'text' => 'https://youtu.be/iik25wqIuFo'
        ]);
 
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
         
    }
}