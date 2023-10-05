<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Página principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo'] = 'Quiénes somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

    public function catalogo()
    {
        $data['titulo'] = 'Catálogo';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/catalogo');
        echo view('front/footer_view');
    }

    public function editar_usuarios()
    {
        $data['titulo'] = 'Editar usuarios';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/editar_usuarios');
        echo view('front/footer_view');
    }

    public function editar()
    {
        $data['titulo'] = 'Editar';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/editar');
        echo view('front/footer_view');
    }
    public function registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
    public function login()
    {
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
}