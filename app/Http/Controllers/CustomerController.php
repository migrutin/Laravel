<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Cost;

class CustomerController extends Controller
{

    #LOGIN VIEW
    function login(){
        return view('login');
    }



    #REGISTER VIEW
    function register(){
        return view('register');
    }


  #KREIRANJE NOVOG PROFILA
    function save(Request $request){
        
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:customers',
            'password'=>'required|min:5|max:12'
        ]);

        $customer=new Customer;
        $customer->firstname=$request->firstname;
        $customer->lastname=$request->lastname;
        $customer->email=$request->email;
        $customer->password=$request->password;
        $save=$customer->save();
        
        if($save){
            return back()->with('success','Account has been successfuly created');
        }else{

            return back()->with('fail','Account is not created!');
        }
    }


    #LOGOVANJE KORISNIKA
    function log(Request $request){
        
        $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
        ]);


     $customerInfo=Customer::where('email','=',$request->email)->first();

     if(!$customerInfo){
        return back()->with('fail','Account does not exist');
     }else{
        #ako je nasao korisnika sa datim mejlom, treba da proveri password da bi ga pustio dalje!
        if($request->password==$customerInfo->password){
            $request->session()->put('LoggedCustomer',$customerInfo->id);
            return redirect('dashboard');
        }
        else{

            return back()->with('fail','Incorrect password');
        }
     }

    }


    #DASHBOARD PROFIL KORISNIKA
    function dashboard(){
        $lista=Cost::select('*')->where('customer_id',session('LoggedCustomer'))->get();
        $data=['LoggedCustomerInfo'=>Customer::where('id','=',session('LoggedCustomer'))->first(),'lista'=>$lista];
        
        return view('dashboard',$data);
    }

    #LOGOUT KORISNIKA
    function logout(){

        if(session()->has('LoggedCustomer')){

            session()->pull('LoggedCustomer');
            return view('login');
        }
    }












}
