<?php

namespace App\Http\Controllers;

use App\Association;
use App\Code;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public function GetAssociation()
    {
        $associations = Association::all();
       // echo $association;
        return view('association.association', compact('associations'));
    }

    public function GiveToAssociation($id)
    {
        $associations = Association::all();
        foreach ($associations as $association)
        {
            if ($association->name == $id)
            {
                //echo request()->all();

                return view('association.givetoassociation', compact('association'));
            }
        }
        return view('errors.notfound');
//        return $association;

    }

    public function VerifAndAcceptDonation ()
    {
        $code = request('code');
        $verifs = Code::all();

        foreach ($verifs as $verif)
        {
            if (($verif->code == $code))
            {
                if ($verif->used == true)
                {
                    return "code déjà utilisé";
                }
                //echo request()->all();
                echo "c'est bon";
                $verif->used = true;
                $verif->save();
                return view('transfert');
            }
        }
        echo "ça va pas";
    }
}
