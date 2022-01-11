<?php

namespace App\Controllers;

class Web extends BaseController {

    public function index() {
      	echo "selamat datang di ollshop kami";
	}

	public function komentar() {
		echo "ini adalah fungsi komentar";
	}
	public function biodata() {
	    $data['nama'] = 'zzz';
	    $data['alamat'] = 'Kediri';
	    $data['jk'] = 'Perempuan';
	    $data['as'] = 'SMKTIPN';
	    return view('biodata',$data);
	}
	// public function hitung() {
	// 	$data['judul'] = 'Kalkulator sederhana';
	// 	$data['angka1'] = 0;
	// 	$data['angka2'] = 0;
	// 	$data['hasil'] = 0;
	//     return view('kalkulator',$data);
	// }
	// public function proses() {
	// 	$data['judul'] = 'Kalkulator Sederhana';
	// 	$data['angka1']=$this->request->getPost('angka1');
	// 	$data['angka2']=$this->request->getPost('angka2');
	// 	$data['hasil'] = $data['angka1'] * $data['angka2'];
	// 	return view('kalkulator',$data);
	// }

	public function segitiga() {
		$data['judul'] = 'Kalkulator Luas Segitiga';
		$data['angka1'] = 0;
		$data['angka2'] = 0;
		$data['hasil'] = 0;
	    return view('segitiga',$data);
	}
	public function proses() {
		$data['judul'] = 'Kalkulator Luas Segitiga';
		$data['angka1']=$this->request->getPost('angka1');
		$data['angka2']=$this->request->getPost('angka2');
		$data['hasil'] = (1/2) * $data['angka1'] * $data['angka2'];
		return view('segitiga',$data);
	}
}