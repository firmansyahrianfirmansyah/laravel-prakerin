<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function percobaan()
    {
    	$a = "Cucu Cahyani";
    	$b = "Jajang Nurjaman";
    	$c = "Wildan Nugraha";
    	$d = "Padil Paturohman";
    	$e = "Rian Firmansyah";
    	$f = "Shoddik Abdulloh";
    	return view('index', compact('a','b','c','d','e','f'));
    }

    public function perusahaan()
    {
    	$a = "PT.LEN";
    	$b = "PT.SEJAHTRA";
    	$c = "PT.INTEK";
    	$d = "PT.GERINDO";
    	$e = "PT.INTI";
    	$f = "PT.KARYA";
    	return view('b', compact('a','b','c','d','e','f'));
    }

    public function barang()
    {
    	$a = "baju";
    	$b = "celana";
    	$c = "topi";
    	$d = "kaos kaki";
    	$e = "sepatu";
    	$f = "peci";
    	return view('c', compact('a','b','c','d','e','f'));
    }

    public function tempat()
    {
    	$a = "bandung";
    	$b = "jakarta";
    	$c = "surabaya";
    	$d = "makasar";
    	$e = "papua";
    	$f = "gresik";
    	return view('d', compact('a','b','c','d','e','f'));
    }

    public function kendaraan()
    {
    	$a = "motor";
    	$b = "mobil";
    	$c = "beca";
    	$d = "bajaj";
    	$e = "pesawat";
    	$f = "kereta";
    	return view('e', compact('a','b','c','d','e','f'));
    }

    public function param($id)
    {
    	return view('welcome');
    }

    public function parameter($a)
    {
    	return view('welcome2', compact('a'));
    }
}