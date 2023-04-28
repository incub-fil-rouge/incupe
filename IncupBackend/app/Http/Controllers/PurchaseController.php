<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Purchase::all();    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'sponsor'=>'required',
            'idea'=>'required',
            'type'=>'required',
            "confirmed"=> 'required',
            
        ]);
        return  Purchase::create($request->all());
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $purchase=Purchase::find($id); 
        $purchase->Update($request->all());
        return $purchase;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $purchase = Purchase::find($request->id);
       
        return $purchase->delete();
    }


    public function purchases_Sp(request $request ){
        
        $purchase = DB::table('purchases')
        ->where('purchases.sponsor','=',$request->sponsor)
        ->get();
        return $purchase;

    }

}
