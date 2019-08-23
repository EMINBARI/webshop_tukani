<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class BaseController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function products(){
        return view('pages.products');
    }

    public function order(){
        return view('pages.order');
    }
/*
    public function send_order(Request $request){
        $customerName = htmlspecialchars($request->customerName);
        $customerSurname = htmlspecialchars($request->customerSurname);
        $emailAddress = htmlspecialchars($request->emailAddress);
        $city = htmlspecialchars($request->city);

        $customerName = urldecode($request->customerName);
        $customerSurname = urldecode($request->customerSurname);
        $emailAddress = urldecode($request->emailAddress);
        $city = urldecode($request->city);

        $customerName = trim($request->customerName);
        $customerSurname = trim($request->customerSurname);
        $emailAddress = trim($request->emailAddress);
        $city = trim($request->city);


    }
    */
}
