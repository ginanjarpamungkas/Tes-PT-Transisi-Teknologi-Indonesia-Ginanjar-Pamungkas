<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;
use App\Company;

class EmployeController extends Controller{
    public function index(){
        $employees = Employe::paginate(5);

        return view('employe.list',compact('employees'));
    }

    public function create(){
        $companies = Company::get();
        return view('employe.create',compact('companies'));
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'name'      =>  'required',
            'email'     =>  'required',
            'company'   =>  'required',
        ],[
            'name.required'     => 'Nama Wajib Diisi!',
            'email.required'    => 'Alamat Email Wajib Diisi!',
            'company.required'  => 'Perusahaan Wajib Dipilih!',
        ]);
            
        $amp = Employe::create([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'company_id'=>  $request->company,
        ]);
            
        return back()->with('success','Data berhasil disimpan!');
    }

    public function show($id){
        //
    }

    public function edit($id){
        $employe = Employe::whereId($id)->first();
        $companies = Company::get();

        return view('employe.edit',compact('employe','companies'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'      =>  'required',
            'email'     =>  'required',
            'company'   =>  'required',
        ],[
            'name.required'     => 'Nama Perusahaan Wajib Diisi!',
            'email.required'    => 'Alamat Email Wajib Diisi!',
            'company.required'  => 'Perusahaan Wajib Dipilih!',
        ]);

        $employe = Employe::find($id);

        $employe->update([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'company_id'=>  $request->company,
        ]);
        
        return back()->with('success','Data berhasil dirubah!');
    }

    public function destroy($id){
        $employe = Employe::find($id);
        $employe->delete();
        return back()->with('success','Data berhasil dihapus!');
    }
}
