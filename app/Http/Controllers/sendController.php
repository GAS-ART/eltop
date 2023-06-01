<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\sendRequest;

class sendController extends Controller {

    public function submit(sendRequest $req){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $text = $req->input('text');
        $area = $req->input('area');
        $people = $req->input('people');
        $floor = $req->input('floor');
        $day = $req->input('day');
        $night = $req->input('night');

        /*ОТПРАВКА ДАННЫХ ИЗ ФОРМЫ И ФАЙЛА НА ПОЧТУ*/
        mail::send(['html' => 'mail'], ['name' => $name, 'phone' => $phone, 'text' => $text, 'area' => $area, 'people' => $people, 'floor' => $floor, 'day' => $day, 'night' => $night, ], function($message) {
        $message->to('temoha1386@gmail.com')->subject('ЗАКАЗ ЗВОНКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ');
        });
        //return view('send');
    }
}
    
