<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function list()
    {
        $companies = Company::orderBy('name', 'asc')
            ->select(['id', 'name', 'details'])
            ->get();

        return response()->json([
            'companies' => $companies,
        ]);
    }
}
