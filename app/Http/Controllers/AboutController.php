<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

use App\Slide;

use App\Nosotros;

use App\Impresion;
use App\Suministro;
use App\Novedad;


use App\Pienosotro;
use App\Pieproducto;
use App\Piered;
use App\Pieinfo;

class AboutController extends Controller
{
    public function index(){
    	$menus=Menu::all();
    	$nosotros=Nosotros::all();

    	$slides=Slide::all();

    	$impresiones=Impresion::all();
    	$suministros=Suministro::all();
    	$novedades=Novedad::all();


    	$pienosotros=Pienosotro::all();
    	$pieproductos=Pieproducto::all();
    	$pieredes=Piered::all();
    	$pieinfos=Pieinfo::all();


    	return view('about',compact('menus','nosotros','pienosotros','pieproductos','pieredes','pieinfos','impresiones','suministros','novedades','slides'));

    }
    public function guardaraboutus(Request $request){


            $ns=new Nosotros();
            $ns-> titulo=$request->title;
            $ns-> descripcion=$request->descrition;
            $ns->save();


            return redirect('admin/aboutus');

     }
     public function guardarimpresion(Request $request){

            $im=new Impresion();
            $im-> icono=$request->icon;
            $im-> objeto=$request->object;
            $im->save();


            return redirect('admin/impresion');

     }
     public function guardarsum(Request $request){
            
            $sum=new Suministro();
            $sum-> icono=$request->icon;
            $sum-> objeto=$request->object;
            $sum->save();


            return redirect('admin/suministro');

     }
     public function guardarnovedad(Request $request){

            $nv=new Novedad();
            $nv-> icono=$request->icon;
            $nv-> objeto=$request->object;
            $nv->save();


            return redirect('admin/novedad');
            

     }
     public function guardarslide(Request $request){

            $sl=new Slide();
            $sl-> img=$request->image;
            $sl->save();


            return redirect('admin/slide');
            

     }







}
