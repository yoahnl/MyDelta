<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Code;
use \App\Association;
use \App\Company;
use \App\Mail\GetContact;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

class AdminController extends Controller
{
    public function Contact()
    {
        return view('contact');
    }
    public function show()
    {
        $user = User::all();
        return view('admin.panel', compact('user'));
    }
    public function CreateNewCodes()
    {
        $newcode = NULL;
        $company = Company::all();
        return view('admin.createCode', compact('newcode', 'company'));
    }

    public function GenerateCode()
    {
        $company = Company::all();
        $codescheme =  request();
        $compt = 1;
        $mytime = \Carbon\Carbon::now();
        while ($compt <= $codescheme->valeur)
        {
            $rand = $codescheme->company_name.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
            Code::insert(array(
                'code' => $rand,
                'linkedto' => $codescheme->company_name,
                'donation' => $codescheme->coupon,
                'created_at' => $mytime,
                'updated_at' => $mytime
            ));
            $compt = $compt + 1;
        }
        \Session::flash('flash_message',"L'adresse mail a bien été enregistré.");
        \Session::put('date', $mytime);
        $newcode = Code::where('created_at', $mytime)->get();
        return view('admin.createCode', compact('newcode', 'company'));
    }

    public function ShowCodes()
    {
        $codes = Code::all();

        return view('admin.showCode', compact('codes'));
    }

    public function DownloadCodes()
    {
        $company = Company::all();
        return view('admin.download', compact('company'));
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

        $checks = Association::all();

        foreach ($checks as $check)
        {
            if ($check->name == request('name'))
            {
                \Session::flash('flash_message', "l'association existe déjà !");
                \Session::put('type', 'error');
                return view('admin.CreateNewCompany');
            }
        }
        $associations = new Association;
        try {
            $description = request('description');
            $small_description = request('small_description');
            $left_content1 = request('left_content1');
            $left_content2 = request('left_content2');
            $left_content3 = request('left_content3');
            $right_content1 = request('right_content1');
            $right_content2 = request('right_content2');
            $title1 = request('title1');
            $associations->location = request('location');
            $associations->name = request('name');
            $associations->url = request('url');
            $associations->url_facebook = request('url_facebook');
            $associations->small_description = $small_description;
            $associations->description = $description;
            $associations->type = request('type');
            $associations->image = request('image');
            $associations->title1 = $title1;
            $associations->title2 = request('title2');
            $associations->left_title1 = request('left_title1');
            $associations->left_title2 = request('left_title2');
            $associations->left_title3 = request('left_title3');
            $associations->right_title1 = request('right_title1');
            $associations->right_title2 = request('right_title2');
            $associations->left_content1 = $left_content1;
            $associations->left_content2 = $left_content2;
            $associations->left_content3 = $left_content3;
            $associations->right_content1 = $right_content1;
            $associations->right_content2 = $right_content2;

            $associations->save();
        }catch (\Exception $e)
        {
            echo $e;
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
        return view('admin.getNameAssociationToModif', compact('associations'));
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
                return redirect('/');
            }
        }
        return "poulet";
    }

    public function NewCompany()
    {
        return view('admin.CreateNewCompany');
    }

    public function CreateCompany()
    {
        $checks = Company::all();

        foreach ($checks as $check)
        {
            if ($check->name == request('name'))
            {
                \Session::flash('flash_message', "l'entreprise existe déjà !");
                \Session::put('type', 'error');
                return view('admin.CreateNewCompany');
            }
        }
        $company = new Company;

        try {
            $company->name = request('name');
            $company->image = request('company_image');
            $company->save();
        }catch (\Exception $e)
        {
            \Session::flash('flash_message', 'il y a eu un problème');
            \Session::put('type', 'error');
            return view('admin.CreateNewCompany');
        }
        \Session::flash('flash_message', "l'entreprise a été rajouté à la base de donnée");
        \Session::put('type', 'sucess');
        return view('admin.CreateNewCompany');
    }

    public function ToArray()
    {
        $alls = Association::all();
        $new = array();
        foreach ($alls as $all)
        {
            array_push($new, $all->name);
        }
        return $new;
    }

    public function SetAssociationToCompany()
    {
        $companys = Company::all();
        $associations = Association::all();
        $companys_association_array;
        foreach ($companys as $company)
        {
            $companys_association_array = json_decode($company->association);
        }
        //return "poulet";
        return view('admin.associationToCompany', compact('companys', 'associations'));
    }

    public function GetAssociationToCompany()
    {
        $checks = Company::all();
        $form = request();
        try {
            foreach ($checks as $check)
            {
                $nameToLook = "association_" . $check->name;
                $new = $form->$nameToLook;
                $tmp = json_encode($new);
                $check->association = $tmp;
                $check->save();
            }
        }
        catch (\Exception $e)
        {
            \Session::flash('flash_message', 'Une entreprise ne peut pas soutenir aucune association enfin ! Sinon qu\'est qu \'elle ferait ici ?');
            \Session::put('type', 'error');
            $companys = Company::all();
            $associations = Association::all();
            return view('admin.associationToCompany', compact('companys', 'associations'));
        }
        return redirect('/');
    }

    /**
     *
     */
    public function SendMailToSupport()
    {
        $infos = request();
        $data = array('email' => $infos->email, 'name' => $infos->name,'subject' => $infos->subject,'body_message' => $infos->message);
        \Mail::send('mail.GetContact', $data,
            function ($message)
            {
                $message->to("yoahn.l@me.com");
                $message->subject('ceci est un test');
            }
        );
        return redirect('/');
    }
}


