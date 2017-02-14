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

    public function DownloadCodes()
    {
        return view('admin.download');
    }

    public function MakeShit()
    {
        \Excel::create('Codes Groupes', function($excel)
        {
           /* $form = request();

            if ($form->societe || $form->used)
            {
                if ($form->societe && $form->used)
                {
                    if ($form->used == "oui")
                    {
                        $use = 1;
                    }
                    elseif ($form->used == "non")
                    {
                        $use = 0;
                    }
                    $code = Code::where('linkedto','used', $form->societe, $use)->get();
                }
                else
                {
                    $code = Code::where('linkedto', $form->societe)->get();
                }


                // Set the title
                $excel->setTitle('Code');

                // Chain the setters
                $excel->setCreator('MyDelta')->setCompany('Code');

                $excel->setDescription('Data From MyDelta');

                $data = $code;

                $excel->sheet('Code', function ($sheet) use ($data) {
                    $sheet->setOrientation('landscape');
                    $sheet->fromArray($data, NULL, 'A1');
                });
            }
            else
            {*/
                $code = Code::all();


                // Set the title
                $excel->setTitle('Code');

                // Chain the setters
                $excel->setCreator('MyDelta')->setCompany('Code');

                $excel->setDescription('Data From MyDelta');

                $data = $code;

                $excel->sheet('Code', function ($sheet) use ($data) {
                    $sheet->setOrientation('landscape');
                    $sheet->fromArray($data, NULL, 'A1');
                });
            //}

        })->download('xlsx');
    }
}


