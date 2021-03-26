<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'Login | Pilketos MTsN 2 Ende',
			'style' => 'login_style.css'
		];

		return view('awal/login', $data);
	}

	public function first()
	{
		$data = [
			'judul' => 'Pilketos MTsN 2 Ende',
			'style' => 'first_style.css'
		];

		return view('awal/first_page', $data);
	}
}
