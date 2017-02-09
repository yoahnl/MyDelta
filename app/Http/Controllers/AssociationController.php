<?php

namespace App\Http\Controllers;
use App\Association;
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
                return view('association.givetoassociation', compact('association'));
            }
        }
        return view('errors.notfound');
//        return $association;

    }
}
