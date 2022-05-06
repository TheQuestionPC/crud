<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\ResponsavelModel;
use App\Models\TipoModel;
use App\Models\CadastroModel;
use App\Models\UserModel;

class Home extends BaseController
{
	private $responsavelModel;
	private $tipoModel;
	private $cadastroModel;

	function __construct(){
		$this->responsavelModel = new ResponsavelModel();
		$this->tipoModel = new TipoModel();
		$this->cadastroModel = new CadastroModel();
		$this->usuariosModel = new UserModel();

	}

	public function index()
	{


		$total_de_cadastros = count(
            $this->cadastroModel->findAll()
        );

        $responsavelModel = count(
            $this->responsavelModel->findAll()
        );

        $total_de_tipos = count(
            $this->tipoModel->findAll()
        );
        $total_de_usuarios = count(
            $this->usuariosModel->findAll()
        );

		$data['title'] = 'Home';

		$data['total_de_cadastros'] = $total_de_cadastros;
        $data['total_de_responsaveis'] = $responsavelModel;
        $data['total_de_tipos'] = $total_de_tipos;
        $data['total_de_usuarios'] = $total_de_usuarios;

		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/home', $data);
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
	}

	//--------------------------------------------------------------------

}
