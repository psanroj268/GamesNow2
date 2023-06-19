<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoController extends Controller
{
    function __construct(){
        $this->middleware('permission:ver-juego | crear-juego | editar-juego | borrar-juego')->only('index');
        $this->middleware('permission:crear-juego', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-juego', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-juego', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juego::paginate(5);
        return view('juegos.index', compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juegos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'titulo' => 'required',
            'contenido' => 'required',
            'categoria' => 'required'
        ]);
        Juego::create($request->all());
        return redirect()->route('juegos.index');
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
    public function edit(Juego $juego)
    {
        return view('juegos.editar', compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juego $juego)
    {
        request()->validate([
            'titulo' => 'required',
            'contenido' => 'required',
            'categoria' => 'required'
        ]);
        $juego->update($request->all());
        return redirect()->route('juegos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juego $juego)
    {
        $juego->delete();
        return redirect()->route('juegos.index');
    }
}
