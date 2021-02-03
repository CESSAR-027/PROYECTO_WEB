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


class InicioController extends Controller
{
    public function index(){
    	$menus=Menu::all();
        $intros=Intro::all();
    	$imagenes=Imagen::all();
    	
    	$titulos=Titulo::all();
    	$papelerias=Papeleria::all();
    	$estudiantes=Estudiante::all();
    	$oficinas=Oficina::all();




    	$pienosotros=Pienosotro::all();
    	$pieproductos=Pieproducto::all();
    	$pieredes=Piered::all();
    	$pieinfos=Pieinfo::all();


    	return view('inicio',compact('menus','intros','imagenes','pienosotros','pieproductos','pieredes','pieinfos','papelerias','estudiantes','oficinas','titulos'));

    }
    public function guardarimg(Request $request){

            $ig=new Imagen();
            $ig-> imagen=$request->img;
            $ig->save();


            return redirect('admin/img');

     }
     public function guardartitulo(Request $request){

            $tl=new Titulo();
            $tl-> titulo=$request->title;
            $tl-> descripcion=$request->descrition;
            $tl->save();


            return redirect('admin/titulo');

     }
     public function guardarpapel(Request $request){

            $pl=new Papeleria();
            $pl-> icono=$request->icon;
            $pl-> articulo=$request->article;
            $pl->save();


            return redirect('admin/papel');

     }
     public function guardarestudiante(Request $request){

            $es=new Estudiante();
            $es-> icono=$request->icon;
            $es-> articulo=$request->article;
            $es->save();


            return redirect('admin/estudiante');

     }
     public function guardaroficina(Request $request){

            $of=new Oficina();
            $of-> icono=$request->icon;
            $of-> articulo=$request->article;
            $of->save();


            return redirect('admin/oficina');

     }
     public function guardarintro(Request $request){

            $int=new Intro();
            $int-> introduccion=$request->into;
            $int->save();


            return redirect('admin/intro');

     }

    
}
