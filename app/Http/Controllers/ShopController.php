<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

use App\Titleproducto;
use App\Producto;

use App\Pienosotro;
use App\Pieproducto;
use App\Piered;
use App\Pieinfo;


class ShopController extends Controller
{
    public function index(){
    	$menus=Menu::all();
    	
        $titleproductos=Titleproducto::all();
    	$productos=Producto::all();



    	$pienosotros=Pienosotro::all();
    	$pieproductos=Pieproducto::all();
    	$pieredes=Piered::all();
    	$pieinfos=Pieinfo::all();


    	return view('shop',compact('menus','titleproductos','productos','pienosotros','pieproductos','pieredes','pieinfos'));

    }

    public function guardarproduct(Request $request){

            $pr=new Producto();
            $pr-> imagen=$request->img;
            $pr-> titulo=$request->title;
            $pr-> descripcion=$request->descrition;
            $pr->save();


            return redirect('admin/producto');

     }
     public function guardartitle(Request $request){

            $tp=new Titleproducto();
            $tp-> titulo=$request->title;
            
            $tp->save();


            return redirect('admin/title');

     }
}
