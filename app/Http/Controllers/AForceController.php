<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Se manda a llamar el modelo
use App\Models\AForce;

class AForceController extends Controller
{
    //Para ver los datos en formato JSON
    public function bForce()
    {
        $aforce = AForce::all();
        return response()->json(['status'=> 'Vista', 'VistaBlog' => $aforce]);
        
    }
    //Creacion del primer controlador

    public function aForce()
    {
        //Publicacion en orden
        $aforce= AForce::all();
        $arregloforce=[];
        foreach($aforce as $publicforce)
        {
            $arregloforce[]=
            [
                'id'=>$publicforce['id'],
                'Nombre'=>$publicforce['Nombre'],
                'Parrafo1'=>$publicforce['Parrafo1'],
                'Parrafo2'=>$publicforce['Parrafo2'],
                'Imagen1'=>$publicforce['Imagen1'],
                'Imagen2'=>$publicforce['Imagen2'],
                'slug'=>$publicforce['slug'],
            ];
        }

        //Publicaciones del primer tema
        $aforce1= AForce::where('id', '<', 11)->get();
        $arregloforce1=[];
        foreach($aforce1 as $publicforce1)
        {
            $arregloforce1[]=
            [
                'id'=>$publicforce1['id'],
                'Nombre'=>$publicforce1['Nombre'],
                'Parrafo1'=>$publicforce1['Parrafo1'],
                'Parrafo2'=>$publicforce1['Parrafo2'],
                'Imagen1'=>$publicforce1['Imagen1'],
                'Imagen2'=>$publicforce1['Imagen2'],
                'slug'=>$publicforce1['slug'],
            ];
        }

        //Publicaciones del segundo tema
        $aforce2= AForce::where('id', '>=', 11)->where('id', '<', 24)->get();
        $arregloforce2=[];
        foreach($aforce2 as $publicforce2)
        {
            $arregloforce2[]=
            [
                'id'=>$publicforce2['id'],
                'Nombre'=>$publicforce2['Nombre'],
                'Parrafo1'=>$publicforce2['Parrafo1'],
                'Parrafo2'=>$publicforce2['Parrafo2'],
                'Imagen1'=>$publicforce2['Imagen1'],
                'Imagen2'=>$publicforce2['Imagen2'],
                'slug'=>$publicforce2['slug'],
            ];
        }

        //Publicaciones del tercer tema
        $aforce3= AForce::where('id', '>=', 24)->where('id', '<', 26)->get();
        $arregloforce3=[];
        foreach($aforce3 as $publicforce3)
        {
            $arregloforce3[]=
            [
                'id'=>$publicforce3['id'],
                'Nombre'=>$publicforce3['Nombre'],
                'Parrafo1'=>$publicforce3['Parrafo1'],
                'Parrafo2'=>$publicforce3['Parrafo2'],
                'Imagen1'=>$publicforce3['Imagen1'],
                'Imagen2'=>$publicforce3['Imagen2'],
                'slug'=>$publicforce3['slug'],
            ];
        }

        //Publicaciones del cuarto tema
        $aforce4= AForce::where('id', '>=', 26)->where('id', '<', 27)->get();
        $arregloforce4=[];
        foreach($aforce4 as $publicforce4)
        {
            $arregloforce4[]=
            [
                'id'=>$publicforce4['id'],
                'Nombre'=>$publicforce4['Nombre'],
                'Parrafo1'=>$publicforce4['Parrafo1'],
                'Parrafo2'=>$publicforce4['Parrafo2'],
                'Imagen1'=>$publicforce4['Imagen1'],
                'Imagen2'=>$publicforce4['Imagen2'],
                'slug'=>$publicforce4['slug'],
            ];
        }

        //Publicaicones del quinto tema
        $aforce5= AForce::where('id', '>=', 27)->where('id', '<', 28)->get();
        $arregloforce5=[];
        foreach($aforce5 as $publicforce5)
        {
            $arregloforce5[]=
            [
                'id'=>$publicforce5['id'],
                'Nombre'=>$publicforce5['Nombre'],
                'Parrafo1'=>$publicforce5['Parrafo1'],
                'Parrafo2'=>$publicforce5['Parrafo2'],
                'Imagen1'=>$publicforce5['Imagen1'],
                'Imagen2'=>$publicforce5['Imagen2'],
                'slug'=>$publicforce5['slug'],
            ];
        }

        //Publicaciones del sexto tema
        $aforce6= AForce::where('id', '>=', 28)->/* where('id', '<', 28)-> */get();
        $arregloforce6=[];
        foreach($aforce6 as $publicforce6)
        {
            $arregloforce6[]=
            [
                'id'=>$publicforce6['id'],
                'Nombre'=>$publicforce6['Nombre'],
                'Parrafo1'=>$publicforce6['Parrafo1'],
                'Parrafo2'=>$publicforce6['Parrafo2'],
                'Imagen1'=>$publicforce6['Imagen1'],
                'Imagen2'=>$publicforce6['Imagen2'],
                'slug'=>$publicforce6['slug'],
            ];
        }

        return view('landing',['aforce'=>$aforce,'aforce1'=>$arregloforce1,'aforce2'=>$arregloforce2,'aforce3'=>$arregloforce3,'aforce4'=>$arregloforce4,'aforce5'=>$arregloforce5,'aforce6'=>$arregloforce6]);
        
    }

    public function tema($slug)
    {
        $aforce= AForce::where('slug',$slug)->first();

        //Publicaciones del primer tema
        $aforce1= AForce::where('id', '<', 11)->get();
        $arregloforce1=[];
        foreach($aforce1 as $publicforce1)
        {
            $arregloforce1[]=
            [
                'id'=>$publicforce1['id'],
                'Nombre'=>$publicforce1['Nombre'],
                'Parrafo1'=>$publicforce1['Parrafo1'],
                'Parrafo2'=>$publicforce1['Parrafo2'],
                'Imagen1'=>$publicforce1['Imagen1'],
                'Imagen2'=>$publicforce1['Imagen2'],
                'slug'=>$publicforce1['slug'],
            ];
        }

        //Publicaciones del segundo tema
        $aforce2= AForce::where('id', '>=', 11)->where('id', '<', 24)->get();
        $arregloforce2=[];
        foreach($aforce2 as $publicforce2)
        {
            $arregloforce2[]=
            [
                'id'=>$publicforce2['id'],
                'Nombre'=>$publicforce2['Nombre'],
                'Parrafo1'=>$publicforce2['Parrafo1'],
                'Parrafo2'=>$publicforce2['Parrafo2'],
                'Imagen1'=>$publicforce2['Imagen1'],
                'Imagen2'=>$publicforce2['Imagen2'],
                'slug'=>$publicforce2['slug'],
            ];
        }

        //Publicaciones del tercer tema
        $aforce3= AForce::where('id', '>=', 24)->where('id', '<', 26)->get();
        $arregloforce3=[];
        foreach($aforce3 as $publicforce3)
        {
            $arregloforce3[]=
            [
                'id'=>$publicforce3['id'],
                'Nombre'=>$publicforce3['Nombre'],
                'Parrafo1'=>$publicforce3['Parrafo1'],
                'Parrafo2'=>$publicforce3['Parrafo2'],
                'Imagen1'=>$publicforce3['Imagen1'],
                'Imagen2'=>$publicforce3['Imagen2'],
                'slug'=>$publicforce3['slug'],
            ];
        }

        //Publicaciones del cuarto tema
        $aforce4= AForce::where('id', '>=', 26)->where('id', '<', 27)->get();
        $arregloforce4=[];
        foreach($aforce4 as $publicforce4)
        {
            $arregloforce4[]=
            [
                'id'=>$publicforce4['id'],
                'Nombre'=>$publicforce4['Nombre'],
                'Parrafo1'=>$publicforce4['Parrafo1'],
                'Parrafo2'=>$publicforce4['Parrafo2'],
                'Imagen1'=>$publicforce4['Imagen1'],
                'Imagen2'=>$publicforce4['Imagen2'],
                'slug'=>$publicforce4['slug'],
            ];
        }

        //Publicaicones del quinto tema
        $aforce5= AForce::where('id', '>=', 27)->where('id', '<', 28)->get();
        $arregloforce5=[];
        foreach($aforce5 as $publicforce5)
        {
            $arregloforce5[]=
            [
                'id'=>$publicforce5['id'],
                'Nombre'=>$publicforce5['Nombre'],
                'Parrafo1'=>$publicforce5['Parrafo1'],
                'Parrafo2'=>$publicforce5['Parrafo2'],
                'Imagen1'=>$publicforce5['Imagen1'],
                'Imagen2'=>$publicforce5['Imagen2'],
                'slug'=>$publicforce5['slug'],
            ];
        }

        //Publicaciones del sexto tema
        $aforce6= AForce::where('id', '>=', 28)->/* where('id', '<', 28)-> */get();
        $arregloforce6=[];
        foreach($aforce6 as $publicforce6)
        {
            $arregloforce6[]=
            [
                'id'=>$publicforce6['id'],
                'Nombre'=>$publicforce6['Nombre'],
                'Parrafo1'=>$publicforce6['Parrafo1'],
                'Parrafo2'=>$publicforce6['Parrafo2'],
                'Imagen1'=>$publicforce6['Imagen1'],
                'Imagen2'=>$publicforce6['Imagen2'],
                'slug'=>$publicforce6['slug'],
            ];
        }
        $aleatorio=[];
        while(count($aleatorio)<3)
        {
            $opcion = AForce::find(rand(1,AForce::get()->count()));
            if($opcion)
            {
                array_push($aleatorio, $opcion);
            }
        }

        if($aforce){
            return view('generic', ['aforce'=>$aforce,'aforce1'=>$arregloforce1,'aforce2'=>$arregloforce2,'aforce3'=>$arregloforce3,'aforce4'=>$arregloforce4,'aforce5'=>$arregloforce5,'aforce6'=>$arregloforce6, 'alea'=>$aleatorio]);
        }
        else{
            echo 'No se encontro nada';
        }
        
        //$aviones=AForce::where('id', '>', '0')->where('id', '<=', '10')->get();

    }
}
