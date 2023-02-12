<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::all();
        return view('viewLead', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('leads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        // Store the data in the database
        $lead = new Lead;
        $lead->nom = $request->name;
        $lead->prenom = $request->prenom;
        $lead->mail = $request->email;
        $lead->tel = $request->phone;
        $lead->entreprise = $request->entreprise;
        $lead->operation = $request->operation;
        $lead->type_de_bien = $request->type_de_bien;
        $lead->ville = $request->ville;
        $lead->quartier = $request->quartier;
        $lead->budget = $request->budget;
        $lead->commentaire = $request->commentaire;
        $lead->source = $request->source;


        $lead->save();

        // Redirect the user back to the form
        return redirect()->back()->with('success', 'Lead created successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leadEdits = Lead::find($id);
        return view('viewLead')->with('lea', $leadEdits);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lead = Lead::find($id);
        $lead->nom = $request->name;
        $lead->prenom = $request->prenom;
        $lead->mail = $request->email;
        $lead->tel = $request->phone;
        $lead->entreprise = $request->entreprise;
        $lead->operation = $request->operation;
        $lead->type_de_bien = $request->type_de_bien;
        $lead->ville = $request->ville;
        $lead->quartier = $request->quartier;
        $lead->budget = $request->budget;
        $lead->commentaire = $request->commentaire;
        $lead->source = $request->source;
        $lead->update();
        return redirect()->with('status', 'Lead Added Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $lead = Lead::find($id);
           $lead->delete();
  
        return redirect('/');
    }
}
