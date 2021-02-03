<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Contacto1;
use App\Contacto2;
use App\Pienosotro;
use App\Pieproducto;
use App\Piered;
use App\Pieinfo;


class ContactController extends Controller
{
    public function index(){
    	$menus=Menu::all();
    	$contactos1=Contacto1::all();
    	$contactos2=Contacto2::all();



    	


    	$pienosotros=Pienosotro::all();
    	$pieproductos=Pieproducto::all();
    	$pieredes=Piered::all();
    	$pieinfos=Pieinfo::all();
    	


    	return view('contact',compact('menus','contactos1','contactos2','pienosotros','pieproductos','pieredes','pieinfos'));

    }

    public function guardarcontact1(Request $request){

            $c1=new Contacto1();
            $c1-> icono=$request->icon;
            $c1-> dato=$request->data;
            $c1->save();
            return redirect('admin/contact1');

     }
     public function guardarcontact2(Request $request){

            $c2=new Contacto2();
            $c2-> icono=$request->icon;
            $c2-> dato=$request->data;
            $c2->save();
            return redirect('admin/contact2');

     }






}
