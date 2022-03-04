<?php

namespace App\Controllers;
use App\Models\uRegistro;
class FControler extends BaseController
{
    public function index() {
        //return view('formulario/menu');
         return view('formulario/inicio');

    }

      public function ingreso() {
        //return view('formulario/menu');
         return view('formulario/vRegistroEncontrado');
    }


    public function insertar() {
        $uRegistro= new uRegistro();
        $usuarioNuevo =[
            "nombre"=>$_POST['nombre'],
            "apellidos"=>$_POST['apellidos'],
            "nempleado"=>$_POST['nempleado'],
            "producto"=>$_POST['producto'],
            "direccion"=>$_POST['direccion'],
            "numero"=>$_POST['numero'],
        ];
        $uRegistro-> insert($usuarioNuevo);
        $datoId['idRegistrado']=$uRegistro->db->insertID();
        return view("formulario/vSuccess",$datoId);
    }

    

    public function mostrarRegistros(){
        $uRegistro = new uRegistro();
        $todos=$uRegistro->findAll();
        $compras=array('compras'=>$todos);

        return view("vRegistros",$compras);
    }

      public function ingresar(){
        $uRegistro = new uRegistro();
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $user=$uRegistro -> where('nombre',$nombre)-> where('apellido',$apellido)-> first();

        return view("vIngresado",$user);
    }

  public function buscar(){
        $uRegistro = new uRegistro();
        $nempleado = $_POST['nempleado'];
        $nombre = $uRegistro-> find($nombre);
        return view("vRegistroEncontrado",$nombre);
    }

 public function actualizar(){
        $uRegistro = new uRegistro();
        $nempleado = $_POST['nempleado'];
        $ractualizado = [
        "nombre"=>$_POST['nombre'],
            "apellidos"=>$_POST['apellidos'],
            "nempleado"=>$_POST['nempleado'],
            "producto"=>$_POST['producto'],
            "direccion"=>$_POST['direccion'],
            "numero"=>$_POST['numero'],
            ];
         $uRegistro-> update($nempleado, $ractualizado);


        return $this-> mostrarRegistros();
    }


    
    }