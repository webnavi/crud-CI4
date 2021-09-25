<?php

namespace App\Controllers;

use App\Models\Libro;

class Libros extends BaseController
{
    public function index()
    {
        $libro = new Libro();
        $datos['libros'] = $libro->orderBy('id', 'ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/pie');

        return view('libros/listar', $datos);
    }

    public function crear()
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/pie');

        return view('libros/crear', $datos);
    }

    public function guardar()
    {
        $libro = new Libro();


        $nombre = $this->request->getVar('nombre');
        $imagen = $this->request->getFile('imagen');

        if($imagen){
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/uploads/'.$nuevoNombre);
            $datos = ['nombre' => $nombre, 'imagen'=> $nuevoNombre];

            $libro->insert($datos);
        }
        
        echo $nombre;
        exit;
        
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/pie');

        return view('libros/crear', $datos);
    }

    public function borrar($id=null){

        echo $id;

    }
}