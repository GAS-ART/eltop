<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class GoogleAdsFormController extends Controller
{
    public function sendDataToEmail (Request $req){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $city = $req->input('city');
        $houseArea = $req->input('houseArea');
        $people = $req->input('people');

        Mail::send(['html' => 'google_ads_form'], ['name' => $name, 'phone' => $phone, 'city' => $city, 'houseArea' => $houseArea, 'people' => $people,], function($message) {
            $message->to('temoha1386@gmail.com')->subject('СООБЩЕНИЕ ИЗ ФОРМЫ GOOGLE');
        });
    }
}
