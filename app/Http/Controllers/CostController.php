<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Cost;

class CostController extends Controller
{
   
    #KREIRANJE NOVOG COST-A
    function createCost(Request $request){
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);

       Cost::create([
           'name'=>$request->name,
           'price'=>(string)$request->price,
           'description'=>$request->description,
           'customer_id'=>$request->customer_id
       ]);

       return back()->with('success','Cost has been successfuly created');

    }

    #BRISANJE  COST-A
    function destroy($id){

        $cost = Cost::where('id', $id)->firstorfail()->delete();
        return back()->with('success');
    }


    #PREBACIVANJE NA UPDATE STRANU
    function update($id){

        $updata=['CostForUpdate'=>Cost::where('id','=',$id)->first()];
        return view('update',$updata);

    }


    #IZVRSENJE UPDATE-A
    function execute(Request $request){

        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);

       $cost=Cost::where('id', $request->id)->firstorfail();
       $cost->name=$request->name;
       $cost->price=$request->price;
       $cost->description=$request->description;
       $cost->save();

        return redirect('/dashboard');
    }


    
}














    
