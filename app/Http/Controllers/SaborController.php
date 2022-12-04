<?php

namespace App\Http\Controllers;

use App\Models\Sabor;
use Illuminate\Http\Request;

class SaborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sabores = Producto::with('sabor');
        return view('sabor.saborIndex', compact('sabores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sabores = Sabor::all();
        return view('sabor.saborCreate', compact ('sabores', 'tamanios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
         $request -> validate([
            'sabor' => 'required'
        ]);
    
        $sabor = Sabor::create($request->all());

        return redirect('/sabor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function show(Sabor $sabor)
    {
        return view('sabor.saborShow', compact('sabor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sabor $sabor)
    {
        return view('sabor.saborEdit', compact('sabor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sabor $sabor)
    {
        $request -> validate([
            'sabor' => 'required'
        ]);

        Sabor::where('id', $sabor->id)->update($request->except('_token', '_method' ,'editar'));
        return redirect ('/sabor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sabor $sabor)
    {
        $sabor->delete();

        return redirect('/sabor');
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show','borrar');
    }



}
