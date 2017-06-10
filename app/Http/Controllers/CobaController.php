<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coba;

class CobaController extends Controller
{
    //
    public function test()
    {
    	$a = coba::all();
    	return $a;
    }

     public function test2($id)
    {
    	$a = coba::find($id);
    	return $a;
    }

    public function rian()
    {
    	$tampilan = coba::all();
    	return view('indeks', compact('tampilan'));
    }

    public function percobian()
    {
    	$data = ['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	return view('indes', compact('data'));
    }


    public function dunia($data)
    {
    	$dato = ['binatang' => ['Maung','Lutung','Bagong','Oray','Sireum'],
    			'kendaraan' => ['Motor','Mobil','Bajaj','Beca','Sapedah'],
    			'laptop' => ['ASUS','ACER','LG','LENOVO','SAMSUNG']];
    	$yoyo = $dato[$data];
    	return view('aa', compact('yoyo'));
    }

      public function test3($nama & $jurusan)
    {
    	$a = coba::where('nama','like',$nama)->orwhere('jurusan','like',$jurusan)->get();
    	return $a;
    }
}
