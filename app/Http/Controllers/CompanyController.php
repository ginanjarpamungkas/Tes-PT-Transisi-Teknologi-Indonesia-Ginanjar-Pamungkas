<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller{
    
    public function index(){
        $companies = Company::paginate(5);

        return view('company.list',compact('companies'));
    }

    public function create(){
        return view('company.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'      =>  'required',
            'email'     =>  'required',
            'website'   =>  'required',
            'logo'      =>  'required||mimes:png|max:2048|dimensions:min_width=100,min_height=100',
        ],[
            'name.required'     => 'Nama Perusahaan Wajib Diisi!',
            'email.required'    => 'Alamat Email Wajib Diisi!',
            'website.required'  => 'Website Wajib Diisi!',
            'logo.required'     => 'Logo Wajib Diisi!',
            'logo.mimes'        => 'Format Logo Harus PNG',
            'logo.max'          => 'Ukuran Logo Maksimal 2Mb!',
            'logo.dimensions'   => 'Dimensi Logo Minimal 100x100 pixels!'
        ]);
        // dd($request->all());
        $logo = str_slug($request->name, '-');
                
        $company = Company::create([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'website'   =>  $request->website,
            'logo'      =>  'logo-'.$logo.'.png',
            ]);
            
        //beri nama file
    	$logoName = 'logo-'.$logo.'.'.
    	//ambil file sesuai aslinya
        $request->file('logo')->getClientOriginalExtension();
        //masukan file kefolder
	    $request->file('logo')->move(
	        base_path() . '/public/storage/app/company', $logoName
        );
        
        return back()->with('success','Data berhasil disimpan!');
    }

    public function show($id){
        //
    }

    public function edit($id){
        $company = Company::whereId($id)->first();

        return view('company.edit',compact('company'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'      =>  'required',
            'email'     =>  'required',
            'website'   =>  'required',
            // 'logo'      =>  'required||mimes:png|max:2048|dimensions:min_width=100,min_height=100',
        ],[
            'name.required'     => 'Nama Perusahaan Wajib Diisi!',
            'email.required'    => 'Alamat Email Wajib Diisi!',
            'website.required'  => 'Website Wajib Diisi!',
            'logo.required'     => 'Logo Wajib Diisi!',
            'logo.mimes'        => 'Format Logo Harus PNG',
            'logo.max'          => 'Ukuran Logo Maksimal 2Mb!',
            // 'logo.dimensions'   => 'Dimensi Logo Minimal 100x100 pixels!'
        ]);

        $company = Company::find($id);

        $company->update([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'website'   =>  $request->website,
            // 'logo'      =>  'logo-'.$logo.'.png',
        ]);
        
        return back()->with('success','Data berhasil dirubah!');
    }

    public function destroy($id){
        $company = Company::find($id);
        $company->delete();
        return back()->with('success','Data berhasil dihapus!');
    }
}
