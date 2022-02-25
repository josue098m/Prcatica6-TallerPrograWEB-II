<?php

namespace App\Controllers;
use App\Models\uRegistro;
class FControler extends BaseController
{
    public function index() {
        //return view('formulario/menu');
         return view('formulario/menu');

    }

      public function menu() {
        //return view('formulario/menu');
         return view('formulario/inicio');
    }

/*
     public function insertar() {
        $uRegistro= new uRegistro();
        $usuarioNuevo =[
            "nombre"=>$_POST['nombre'],
            "apellidos"=>$_POST['apellidos']
            "nempleado"=>$_POST['nempleado']
            "producto"=>$_POST['producto']
            "direccion"=>$_POST['direccion']
            "numero"=>$_POST['numero']
        ];
        $uRegistro-> insert($usuarioNuevo);
        $datoId['idRegistrado']=$uRegistro->db->insertID();
        return view("vSuccess",$datoId);
    }
*/
    
    }