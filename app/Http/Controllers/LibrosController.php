<?php

namespace MiLibreria\Http\Controllers;

use MiLibreria\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libros::all();
        return response()->json($libros);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \MiLibreria\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show($libros)
    {

        /*return view('libros.show', [
                'libros' => $libros
            ]);*/
        $libros = Libros::find($libros);
        return response()->json($libros);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MiLibreria\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(Libros $libros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MiLibreria\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libros $libros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MiLibreria\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libros $libros)
    {
        //
    }
}
