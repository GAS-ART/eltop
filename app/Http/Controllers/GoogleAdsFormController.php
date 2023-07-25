<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class GoogleAdsFormController extends Controller
{
    public function sendDataToEmail (Request $req){
        $raw = $req->getContent();
        $data = json_decode($raw, true);

        if ($data['google_key'] === '26ahAmim'){
        $name = $data['user_column_data'][0]['string_value'];
        $phone = $data['user_column_data'][1]['string_value'];
        $city = $data['user_column_data'][2]['string_value'];
        $houseArea = $data['user_column_data'][3]['string_value'];
        $people = $data['user_column_data'][4]['string_value'];

        Mail::send(['html' => 'google_ads_form'], ['name' => $name, 'phone' => $phone, 'city' => $city, 'houseArea' => $houseArea, 'people' => $people,], function($message) {
            $message->to('temoha1386@gmail.com')->subject('СООБЩЕНИЕ ИЗ ФОРМЫ GOOGLE');
        });
        return response()->json(['success' => true]);
    }
        return response()->json(['success' => false, 'error' => 'Invalid data or key'], 400);
    }
}
