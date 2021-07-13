<?php

namespace App\Controllers;

use \App\Models\GalleryModel;

class Pages extends BaseController
{
	//Ini Construct Model (Method buat model)
	//Ini biar bisa this lah
	protected $GallModel;

	public function __construct()
	{
		$this->GallModel = new GalleryModel();
	}
	
	// Ini method Index
	public function index()
	{
		return view('pages/home');
	}
    // Ini untuk di panggil di route ketik user klik about
	
	// Ini method Gallery
	public function gallery()
	{
		$foto = $this->GallModel->findAll();
		// dd($ayam);
		// Kirim foto ke view

		$data = [
			'img' => $foto
		];


		
		return view('pages/gallery', $data);
	}

	
	// Ini method Donasi
	public function donasi()
	{
		return view('pages/donasi');
	}


}
