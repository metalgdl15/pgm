<?php

namespace App\Http\Controllers;

use Auth;
use App\Persona;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personas = persona::all();
        return view ('Usuario.listUsers', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $persona= new Persona();
        //$persona->folio = 5;
        $persona->nombre = $request->nombre;
        $persona->genero = $request->genero;
        $persona->apellidoP = $request->apellidoP;
        $persona->apellidoM = $request->apellidoM;
        $persona->intereses = $request->intereses;
        $persona->user_id = Auth::id();
        $persona->save();

        return redirect()->route('persona.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        Persona::where('folio', $persona->folio)->update($request->except('_token', '_method'));
        return redirect()->back()->with(['mensaje' => 'Se ha guardado el cambio', 'alert-class' => 'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }

    public function viewUpdate(){
        $persona = Auth::user()->persona;
        
        return view('Usuario.updateUser', compact('persona'));
    }

    public function viewInsert(){
        return view('Usuario.insertUser');
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
