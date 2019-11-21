<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employe;

class HomeController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $company = Company::count();
        $employe = Employe::count();

        return view('dashboard.index',compact('company','employe'));
    }
}
