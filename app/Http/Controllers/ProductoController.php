<?php

namespace App\Http\Controllers;

use App\Models\Sabor;
use App\Models\Tamanio;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::with('sabor', 'tamanio');
        return view('producto.productoIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sabores = Sabor::all();
        $tamanios = Tamanio::all();
        return view('producto.productoCreate', compact ('sabores', 'tamanios'));
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
            'sabor' => 'required',
            'tamanio' => 'required',            
            'precio' => 'required|integer',
            'stock' => 'required|integer',
        ]);
    
        $producto = Producto::create($request->all());

        $request->merge(['sabor_id']);
        $request->merge(['tamanio_id']);
        //$producto->sabores()->attach($request->sabores_id);
        //$producto->tamanios()->attach($request->tamanios_id);

        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.productosShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.productosEdit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request -> validate([
            'existencia' => 'integer',
            'nombre' => 'required|max:100|min:3',
            'modelo' => ' required|max:50',
            'precio' => 'integer',
        ]);

        Producto::where('id', $producto->id)->update($request->except('_token', '_method' ,'editar'));
        return redirect ('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect('/producto');
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show','borrar');
    }
}
