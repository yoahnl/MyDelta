<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Code;
use \App\Association;
use \App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function ShowAllCompany()
    {
        $companys =Company::all();
        return view('company.showAllCompany', compact('companys'));

    }
    function ShowCompany($id)
    {
        $companys = Company::where('name', $id)->get();
        $codes = Code::all();
        $list_associations = Association::all();
        $association_number;
        foreach ($companys as $company)
        {
            $associations = json_decode($company->association);
            $used_codes = 0;
            $sommes = 0;
            foreach ($codes as$code)
            {
                if ($code->used == true && $code->linkedto == $company->name)
                {
                    $used_codes++;
                    $sommes = $code->donation + $sommes;
                }
            }

            foreach ($list_associations as $association)
            {
                $association_number =+1;
            }

            return view('company.showCompany', compact('company', 'associations', 'id', 'used_codes', 'sommes', 'list_associations', 'association_number'));
        }
    }
}
