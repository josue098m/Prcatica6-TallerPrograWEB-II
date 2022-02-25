<?php

namespace App\Controllers;
use App\Models\mUsuarios;
class Home extends BaseController
{
    public function index()
    {
        return view('formulario/vmiPagina');
    }

    public function miPagina()
    {
        return view('vmiPagina');
    }

    public function registro()
    {
        return view('vRegistro');
    }

    public function insertarForm()
    {
        $mUsuarios= new mUsuarios();
        $usuarioNuevo =[
            "usuario"=>$_POST['email'],
            "password"=>$_POST['password']
        ];
        $mUsuarios-> insert($usuarioNuevo);
        $datoId['idRegistrado']=$mUsuarios->db->insertID();
        return view("vSuccess",$datoId);
    }
}
