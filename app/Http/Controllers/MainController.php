<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Cost;

class MainController extends Controller
{
    // function login(){

    //     return view('login');
    // }

    // function register(){
    //     return view('register');

    // }


    // function execute(Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'price'=>'required',
    //         'description'=>'required'
    //     ]);

    //    $cost=Cost::where('id', $request->id)->firstorfail();
    //    $cost->name=$request->name;
    //    $cost->price=$request->price;
    //    $cost->description=$request->description;
    //    $cost->save();

    //     return redirect('/dashboard');
    // }





    // function createCost(Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'price'=>'required',
    //         'description'=>'required'
    //     ]);

    //    Cost::create([
    //        'name'=>$request->name,
    //        'price'=>(string)$request->price,
    //        'description'=>$request->description,
    //        'customer_id'=>$request->customer_id
    //    ]);

    //    return back()->with('success','Cost has been successfuly created');

    // }






    // function save(Request $request){
        

    //     $request->validate([
    //         'firstname'=>'required',
    //         'lastname'=>'required',
    //         'email'=>'required|email|unique:customers',
    //         'password'=>'required|min:5|max:12'

    //     ]);
    //     $customer=new Customer;
    //     $customer->firstname=$request->firstname;
    //     $customer->lastname=$request->lastname;
    //     $customer->email=$request->email;
    //     $customer->password=$request->password;
    //     $save=$customer->save();
        
    //     if($save){
    //         return back()->with('success','Account has been successfuly created');
    //     }else{

    //         return back()->with('fail','Account is not created!');
    //     }



    // }


    // function log(Request $request){
        

    //     $request->validate([
    //         'email'=>'required|email',
    //         'password'=>'required|min:5|max:12'




    //     ]);

    // $customerInfo=Customer::where('email','=',$request->email)->first();

    // if(!$customerInfo){
    //     return back()->with('fail','Account does not exist');
    // }else{
    //     #ako je nasao korisnika sa datim mejlom, treba da provedi password da bi ga pustio dalje!
    //     if($request->password==$customerInfo->password){
    //         $request->session()->put('LoggedCustomer',$customerInfo->id);
    //         return redirect('dashboard');
    //     }
    //     else{

    //         return back()->with('fail','Incorrect password');
    //     }


    // }

    // }


    // function dashboard(){
    //     $lista=Cost::select('*')->where('customer_id',session('LoggedCustomer'))->get();
    //     $data=['LoggedCustomerInfo'=>Customer::where('id','=',session('LoggedCustomer'))->first(),'lista'=>$lista];
        
    //     return view('dashboard',$data);
    // }

    // function logout(){

    //     if(session()->has('LoggedCustomer')){

    //         session()->pull('LoggedCustomer');
    //         return view('login');
    //     }
    // }


    // function destroy($id){

    //     $cost = Cost::where('id', $id)->firstorfail()->delete();
    //     return back()->with('success');
    // }


    // function update($id){

    //     $updata=['CostForUpdate'=>Cost::where('id','=',$id)->first()];
    //     return view('update',$updata);

    //  }




}
