<?php

namespace App\Http\Controllers\adminlte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	//principal
    public function index(){
    	return view('adminlte.home');
    }
    //menu
    public function ingresomenu(){
    	return view('adminlte.menu');
    }
    //pie de pagina
    public function ingresoabout(){
    	return view('adminlte.pienosotros');
    }
    public function ingresoproducts(){
    	return view('adminlte.pieproducts');
    }
    public function ingresoredes(){
    	return view('adminlte.pieredes');
    }
    public function ingresoinfo(){
    	return view('adminlte.pieinfo');
    }

    //home
    public function ingresointro(){
    	return view('adminlte.home.intro');
    }
    public function ingresoimg(){
    	return view('adminlte.home.img');
    }
    public function ingresotitulo(){
    	return view('adminlte.home.titulo');
    }
    public function ingresopapel(){
    	return view('adminlte.home.papel');
    }
    public function ingresoestudiante(){
    	return view('adminlte.home.estudiante');
    }
    public function ingresooficina(){
    	return view('adminlte.home.oficina');
    }

    //about
     public function ingresoslide(){
    	return view('adminlte.about.slide');
    }
    public function ingresoaboutus(){
    	return view('adminlte.about.nosotros');
    }
    public function ingresoimpresion(){
    	return view('adminlte.about.impresion');
    }
    public function ingresosum(){
    	return view('adminlte.about.suministro');
    }
    public function ingresonovedad(){
    	return view('adminlte.about.novedad');
    }

    //shop
    public function ingresotitle(){
    	return view('adminlte.shop.title');
    }
    public function ingresoproduct(){
    	return view('adminlte.shop.producto');
    }

    //contact
    public function ingresocontact1(){
    	return view('adminlte.contact.one');
    }
    public function ingresocontact2(){
    	return view('adminlte.contact.two');
    }

}
