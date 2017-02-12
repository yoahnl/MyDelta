<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Code;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        $user = User::all();
        return view('admin.panel', compact('user'));
    }
    public function CreateNewCodes()
    {
        $newcode = NULL;
        return view('admin.createCode', compact('newcode'));
    }

    public function GenerateCode()
    {
        $codescheme =  request();
        $compt = 1;
        $mytime = \Carbon\Carbon::now();
        while ($compt <= $codescheme->valeur)
        {
            $rand = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8);
            Code::insert(array(
                'code' => $rand,
                'linkedto' => $codescheme->societe,
                'donation' => $codescheme->coupon,
                'created_at' => $mytime,
                'updated_at' => $mytime
            ));
            $compt = $compt + 1;
        }
        \Session::flash('flash_message',"L'adresse mail a bien été enregistré.");
        \Session::put('date', $mytime);
        $newcode = Code::where('created_at', $mytime)->get();
        return view('admin.createCode', compact('newcode'));
    }

    public function ShowCodes()
    {
        $codes = Code::all();

        return view('admin.showCode', compact('codes'));
    }
}


