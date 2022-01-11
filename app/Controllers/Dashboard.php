<?php  
namespace App\Controllers;  

use App\Controllers\BaseController; 

class Dashboard extends BaseController {  

    public function __construct() {         
    //aktifkan url helper         
    	helper('url');     

    }  
    
    public function index() {         
    	$data['judul']='Laman Home';          
    	$data['isi']='Lorem ipsum dolor sit amet';          
    	return view('dashboard',$data);     
    }  

     public function gallery() {         
     	$data['judul']='Laman Gallery';           
     	return view('gallery',$data);     
     }  

    public function about() {         
    	$data['judul']='Laman About';          
    	$data['isi']='Ini adalah halaman about';          
    	return view('about',$data);     
    }

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
