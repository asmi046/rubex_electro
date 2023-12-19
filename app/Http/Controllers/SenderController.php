<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ZayavkaMail;

use App\Models\Zayavka;

class SenderController extends Controller
{
    public function send_zayavka(Request $request,) {
        $data = $request->validate([
            "familia" => ['required','string'],
            "name" => ['required','string'],
            "othestvo" => ['required','string'],
            "email" => ['required','string'],
            "ogrn" => ['required','string'],
            "inn" => ['required','string'],
            "orgforma" => ['required','string'],
        ]);

        Zayavka::create($data);

        Mail::to(['asmi046@gmail.com', 'vorobevav@rubexgroup.ru'])->send(new ZayavkaMail($data));

        return redirect()->route('thencs');
    }

    public function thencs(){
        return view('thencs');
    }
}
