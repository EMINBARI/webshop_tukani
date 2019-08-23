<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class MailController extends Controller {

    public function sendOrederViaEmail(Request $request){

        $customerName = htmlspecialchars($request->customerName);
        $customerSurname = htmlspecialchars($request->customerSurname);
        $emailAddress = htmlspecialchars($request->emailAddress);
        $city = htmlspecialchars($request->city);
        $phoneNumber = htmlspecialchars($request->phoneNumber);
        $product = htmlspecialchars($request->product);
        $amount = htmlspecialchars($request->amount);

        $customerName = urldecode($request->customerName);
        $customerSurname = urldecode($request->customerSurname);
        $emailAddress = urldecode($request->emailAddress);
        $city = urldecode($request->city);
        $phoneNumber = urldecode($request->phoneNumber);
        $product = urldecode($request->product);
        $amount = urldecode($request->amount);

        $customerName = trim($request->customerName);
        $customerSurname = trim($request->customerSurname);
        $emailAddress = trim($request->emailAddress);
        $city = trim($request->city);
        $phoneNumber = trim($request->phoneNumber);
        $product = trim($request->product);
        $amount = trim($request->amount);

        $data = array('customerName'=>$customerName,'customerSurname'=>$customerSurname,'emailAddress'=>$emailAddress,'city'=>$city, 'phoneNumber'=>$phoneNumber, 'product'=>$product, 'amount'=>$amount);
       
        Mail::send('mail', $data, function($message) {
            $message->to('web.tukanrr@gmail.com')->subject('Заказ');
            $message->from('web.tukanrr@gmail.com');
        });
        echo "Ваш заказ отправлен и находится в обработке";
        
    }
    
}