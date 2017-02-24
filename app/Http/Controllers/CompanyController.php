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
        $companys =Company::all();
        foreach ($companys as $company)
        {
            if ($company->name == $id)
            {
                $associations = explode(',', $company->association);
                return view('company.showCompany', compact('company', 'associations', 'id'));
            }
        }
    }
}
