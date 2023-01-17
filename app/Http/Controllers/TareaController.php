<?php

namespace App\Http\Controllers;

use App\Http\Requests\TareaRequest;
use App\Models\Tarea;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $busqueda = trim($request->get('buscarpor'));
            $tareas = Tarea::where('nombre', 'like', '%' . $busqueda . '%')
                ->orderBy('id', 'asc')
                ->get();
        }

        return view('tarea.index', ['tareas' => $tareas, 'buscarpor' => $busqueda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $file = request()->file('image');
        $obj = Cloudinary::upload($file->getRealPath(), ['folder' => 'tareas']);
        $url = $obj->getSecurePath();


        Tarea::create([
            "nombre" => request('nombre'),
            "descripcion" => request('descripcion'),
            "image" => $url,
            "urgencia" => request('urgencia'),
            
        ]);
        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return view('tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        return view('tarea.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Tarea $tarea )
    {
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $obj = Cloudinary::upload($file->getRealPath(), ['folder' => 'tareas']);
            $url = $obj->getSecurePath();


            $tarea->update([
                "nombre" => request('nombre'),
                "descripcion" => request('descripcion'),
                "image" => $url,
                "urgencia" => request('urgencia'),
                
                
            ]);
        } else {
            $tarea->update([
                "nombre" => request('nombre'),
                "descripcion" => request('descripcion'),
                "urgencia" => request('urgencia'),
                
            ]);
        }
        return redirect()->route('tarea.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tarea.index');
    }
}
