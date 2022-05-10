<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AgendaModel;



class Agenda extends BaseController
{
	private $agendaModel;

	public function __construct()
	{
		$this->agendaModel = new AgendaModel;
	}

	public function index(){
		$data = [
			'title' => 'Listando agenda'
		];
		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/agenda');
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
	}


}