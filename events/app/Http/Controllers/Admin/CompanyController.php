<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCompanyRequest;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Sanctum\HasApiTokens;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = User::all();

        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {


        return view('admin.companies.create');
    }

    public function store(StoreCompanyRequest $request)
    {
       // $request->password = Hash::make($request->password);
        $company = new User;
        $company->name = $request->name;
        $company->email = $request->email;
        // $company->password = Hash::make($request->password);

    $details=$request->email;

    Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\PasswordMail($details));
        $company->save();
        // $id = $company->id();

        $company->roles()->attach(3);


        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        // $company->password = Hash::make($request->password);

        $company->save();

        $company->createToken('events_app')->accessToken;

        return redirect()->route('admin.companies.index');
    }

    public function edit( $id)
    {
        $company=User::find($id);
        // $company=Company::find($id);

        return view('admin.companies.edit', compact('company'));
    }

    public function update(Request $request,$id)
    {
        $company=User::find($id);
       // $company=Company::find($id);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->password = Hash::make($request->password);
         $company->update();
        return redirect()->route('admin.companies.index');
    }

    public function show(Company $company)
    {


        return view('admin.companies.show', compact('company'));
    }

    public function destroy($id)
    {
        $company=User::find($id);
        $company->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompanyRequest $request)
    {
        Company::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function createpassword(Request $request){

       $rules = [
            'password' => 'required|same:confirm_password|', 'min:8', 'confirmed',
            'confirm_password' => 'required','string', 'min:8', 'confirmed'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'errors' => $validator->errors()->toArray()
            ],200);

        }
        else{
            $user=User::where('email',$request->email)->first();
            if($request->password == $request->confirm_password){
                $user->password=Hash::make($request->password);
                $user->update();
            }
            else{
                return back()->withErrors(['confirm_password'=>'password not match']);
            }

        }
        return redirect(url('/'));

    }
}
