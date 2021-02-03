<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Intro;
use App\Imagen;


use App\Titulo;
use App\Papeleria;
use App\Estudiante;
use App\Oficina;

use App\Pienosotro;
use App\Pieproducto;
use App\Piered;
use App\Pieinfo;


//use App\Impresion;

class MenuController extends Controller
{
    //
    public function cargar(){
    	$menus=Menu::all();
        $intros=Intro::all();
    	$imagenes=Imagen::all();


    	$titulos=Titulo::all();
    	$papelerias=Papeleria::all();
    	$estudiantes=Estudiante::all();
    	$oficinas=Oficina::all();


    	//$impresiones=Impresion::all();





    	$pienosotros=Pienosotro::all();
    	$pieproductos=Pieproducto::all();
    	$pieredes=Piered::all();
    	$pieinfos=Pieinfo::all();

    	return view('inicio',compact('menus','intros','imagenes','pienosotros','pieproductos','pieredes','pieinfos','papelerias','estudiantes','oficinas','titulos'));
    }

    public function guardarmenu(Request $request){


           // dd($request->all());
            
            $menu=new Menu();
            $menu-> titulo=$request->title;
            $menu-> ruta=$request->route;
            $menu-> orden=$request->order;
            $menu->save();

            return redirect('admin/menu');


     }
     public function guardarabout(Request $request){


           // dd($request->all());
            
            $pn=new Pienosotro();
            $pn-> descripcion=$request->descrition;
            $pn->save();

            return redirect('admin/about');

     }
     public function guardarproducts(Request $request){


           // dd($request->all());
            
            $pp=new Pieproducto();
            $pp-> ruta=$request->route;
            $pp-> nombre=$request->name;
            $pp->save();


            return redirect('admin/products');

     }
     public function guardarredes(Request $request){


           // dd($request->all());
            
            $pr=new Piered();
            $pr-> ruta=$request->route;
            $pr-> icono=$request->icon;
            $pr-> red=$request->networks;
            $pr->save();


            return redirect('admin/redes');

     }
     public function guardarinfo(Request $request){


           // dd($request->all());
            
            $pi=new Pieinfo();
            $pi-> ruta=$request->route;
            $pi-> info=$request->information;
            $pi-> dato=$request->data;
            $pi->save();


            return redirect('admin/info');

     }
}
