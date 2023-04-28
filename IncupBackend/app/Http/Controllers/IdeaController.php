<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return idea::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $request->validate([
            'name' =>'required',
            'user'=>'required',
            'description'=>'required',
            'categorie'=>'required'
            
        ]);
        idea::create($request->all());

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $idea = idea::find($request->id);
        return $idea;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function show(idea $idea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function edit(idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $idea = idea::find($request->id);
       
        $idea->delete();
    }

    // public function filterIdea(Request $request){
    //     return   $ideas = Idea::where('name', 'like', '%' . $request-> keywords. '%')
    //     ->orWhere('prixB', 'like', '%' . $request->keywords . '%')
    //     ->orWhere('description', 'like', '%' . $request->keywords .'%')
    //     ->get();

    // }

    public function filterIdea(Request $request) {
        $ideas = Idea::where('categorie', '=', $request->categorie)
                     ->where(function ($query) use ($request) {
                        $query->where('name', 'like', '%' . $request->keywords . '%')
                              ->orWhere('prixB', 'like', '%' . $request->keywords . '%')
                              ->orWhere('description', 'like', '%' . $request->keywords .'%');
                     })
                     ->get();
        return $ideas;
    }
}
