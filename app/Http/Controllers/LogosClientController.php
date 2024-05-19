<?php

namespace App\Http\Controllers;

use App\Models\ClientLogos;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LogosClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = ClientLogos::where('status', '=', true)->get();
        return view('pages.logos.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.logos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $post = new ClientLogos();

        try {
            if ($request->hasFile('imagen')) {
                $file = $request->file('imagen');
                $routeImg = 'storage/images/logos/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
                $this->saveImg($file, $routeImg, $nombreImagen);
                $post->url_image = $routeImg . $nombreImagen;
                // $service->name_image = $nombreImagen;
            }

            $post->title = $request->title;
            $post->description = $request->description;

            $post->status = 1;

            $post->save();
            return redirect()->route('logos.index')->with('success', 'Publicación creado exitosamente.');
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Verifique sus datos ' . $th], 400);
        }
    }

    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        if (!file_exists($route)) {
            mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }
        $img->save($route . $nombreImagen);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }

    function deleteLogo(Request $request)
    {
        $logo = ClientLogos::findOrfail($request->id);

        // Eliminar la imagen si existe
        if ($logo->url_image && file_exists($logo->url_image)) {
            unlink($logo->url_image);
        }

        // Eliminar el logo de la base de datos
        $logo->delete();
        return response()->json(['message' => 'Logo eliminado']);
    }
}