<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ResponsavelModel;
use App\Models\TipoModel;
use App\Models\CadastroModel;


class Cadastro extends BaseController
{
	public function index()
	{
		$model = new CadastroModel();
		$model2 = new TipoModel();
		$model3 = new ResponsavelModel();


		$data = [
				'title' => 'Cadastro',
				'tipo' => $model2->getTipo(),
				'responsavel' => $model3->getResponsavel(),
				'msg' => ''
			];
		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/cadastro');
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
	}

public function ver()
	{
		$model = new CadastroModel();
		$model2 = new TipoModel();
		$model3 = new ResponsavelModel();


		$data = [
				'title' => 'Cadastro',
				'cadastro' => $model->getCadastro(),
				'tipo' => $model2->getTipo(),
				'responsavel' => $model3->getResponsavel(),
				'pager' => $model->pager,
				'msg' => ''
			];
		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/cadastro_ver');
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
	}



	public function editar(){
		$model = new CadastroModel();
		$model2 = new TipoModel();
		$model3 = new ResponsavelModel();

		$id = $this->request->getVar('idcadastro');


		$data = [
				'nomecadastro' => $this->request->getVar('nomecadastro'),
				'email' => $this->request->getVar('email'),
				'statuscadastro' => $this->request->getVar('statuscadastro'),
				'tipo' => $this->request->getVar('tipo'),
				'responsavel' => $this->request->getVar('responsavel'),
			];

		$model->update($id,$data);
		return redirect()->to(base_url('admin/cadastro'));
	}




	public function gravar(){
		$model = new CadastroModel();
		$model2 = new TipoModel();
		$model3 = new ResponsavelModel();

		helper('form');

		if($this->validate([
			'nomecadastro' => ['label' => 'nomecadastro', 'rules' => 'required|min_length[3]|is_unique[cadastro.nomecadastro]|alpha|max_length[12]'],
			'email' => ['label' => 'email', 'rules' => 'required|min_length[3]|valid_email|is_unique[cadastro.email]'],
			'tipo' => ['label' => 'tipo', 'rules' => 'required'],
			'responsavel' => ['label' => 'responsavel', 'rules' => 'required']
			]))
		{

			$id = $this->request->getVar('idcadastro');
			$nomecadastro = $this->request->getVar('nomecadastro');
			$email = $this->request->getVar('email');
			$statuscadastro = $this->request->getVar('statuscadastro');
			$img = $this->request->getFile('img');
			$tipo = $this->request->getVar('tipo');
			$responsavel = $this->request->getVar('responsavel');


			if(!$img->isValid()){
				$model -> save([
					'idcadastro' => $id,
					'nomecadastro' => $nomecadastro,
					'email'=> $email,
					'statuscadastro' => $statuscadastro,
					'tipo' => $tipo,
					'responsavel' => $responsavel,
				]);



			$data = [
				'title' => 'Cadastro',
				'tipo' => $model2->getTipo(),
				'responsavel' => $model3->getResponsavel(),
				'msg' => ''
			];

			echo view('backend/templates/html-header', $data);
			echo view('backend/templates/header');
			echo view('backend/pages/cadastro', $data);
			echo view('backend/templates/footer');
			echo view('backend/templates/html-footer');
			}else{
				$validacaoIMG = $this->validate([
					'img' => [
						'uploaded[img]',
						'mime_in[img,image/jpg,image/jpeg,image/gif,image/png]',
						'max_size[img,4096]',

					]
				]);

				if($validacaoIMG){
					$novoNome = $img->getRandomName();
					$img->move('img/cadastro',$novoNome);
					$model -> save([
					'idcadastro' => $id,
					'nomecadastro' => $nomecadastro,
					'email'=> $email,
					'statuscadastro' => $statuscadastro,
					'tipo' => $tipo,
					'responsavel' => $responsavel,
					'img' => $novoNome,
				]);
				$data = [
				'title' => 'Cadastro',
				'tipo' => $model2->getTipo(),
				'responsavel' => $model3->getResponsavel(),
				'msg' => 'Cadastro feito com sucesso!'
			];
				echo view('backend/templates/html-header', $data);
				echo view('backend/templates/header');
				echo view('backend/pages/cadastro');
				echo view('backend/templates/footer');
				echo view('backend/templates/html-footer');
		

				}
			}


		}else{

			$data = [
				'title' => 'Cadastro',
				'tipo' => $model2->getTipo(),
				'responsavel' => $model3->getResponsavel(),
				'msg' => 'Erro ao cadastrar'
			];

		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/cadastro');
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
		}
	}

	public function excluir ($id = null){
		$model = new CadastroModel();

		$model->delete($id);
		return redirect()->to(base_url('admin/cadastro/ver'));
	}
	



	//--------------------------------------------------------------------

}
	