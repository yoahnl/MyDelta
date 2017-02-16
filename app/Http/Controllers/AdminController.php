<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Code;
use \App\Association;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

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
            $form = request();

            if ($form->societe)
            {
                $code = Code::where('linkedto', $form->societe)->get();

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
            {
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
            }

        })->download('xlsx');
    }

    public function Delete()
    {
        return view('admin.delete');
    }

    public function DeleteData()
    {
        Code::getQuery()->delete();
        return view('admin.delete');
    }

    public function CreateNewAssociation()
    {
        $associations = Association::all();
        return view('admin.createnewassociation');
    }

    public function AddNewAssociation()
    {
        $associations = new Association;
        try {
            $description = request('description');
            $associations->name = request('name');
            $associations->url = request('url');
            $associations->description = $description;
            $associations->type = request('type');
            $associations->image = request('image');
            $associations->save();
        }catch (\Exception $e)
        {
            \Session::flash('flash_message', 'il y a eu un problème');
            \Session::put('type', 'error');
            return view('admin.createnewassociation');
        }
        \Session::flash('flash_message', "l'association a été rajouté à la base de donnée");
        \Session::put('type', 'sucess');
        return view('admin.createnewassociation');
    }

    public function GetAssociationName()
    {
        $associations = Association::all();
        return view('admin.getNameAssociationToModif');
    }

    public function ModifAssociation()
    {
        $form = request();
        $associations = Association::where('name', $form->name)->get();
        foreach ($associations as $association)
        {
            if ($association->name)
            {
                $new = $association;
                return view('admin.modifAssociation', compact('new'));
            }
        }
        \Session::flash('flash_message', "l'association n'existe");
        \Session::put('type', 'error');
        return view('admin.getNameAssociationToModif');
    }

    public function ModifAssociationDone()
    {
        $form = request();

        $associations = Association::where('name', $form->oldname)->get();
        foreach ($associations as $association)
        {
            if ($association->name)
            {
                $new = $association;
                $new->name = $form->name;
                $new->url = $form->url;
                $new->description = $form->description;
                $new->type = $form->type;
                $new->image = $form->image;
                $new->save();
                return view('welcome');
            }
        }
        return "poulet";
    }
}


