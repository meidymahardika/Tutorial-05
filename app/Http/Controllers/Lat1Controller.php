<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nim"] = "1304202024";
        $data["nama"] = "Muhamad Meidy Mahardika";
        $data["asal"] = "Bogor";
       return view('v_latihan1', $data);
    }

    public function method2(){
		$data['title'] = "Daftar Mahasiswa";
		$data['daf_mhs'] = array(
			array("nama" => "Agus", "asal" => "Bandung"),
	 	   array("nama" => "Budi", "asal" => "Jakarta"),
			array("nama" => "Roni", "asal" => "Surabaya")
		);
		return view('v_latihan2', $data);
	}
}
