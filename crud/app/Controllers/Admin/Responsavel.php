<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ResponsavelModel;


class Responsavel extends BaseController
{
	public function index()
	{
		$model = new ResponsavelModel();
		$data = [
				'title' => 'Responsável',
				'responsavel' => $model->getResponsavel(),
				'msg' => ''
			];
		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/responsavel');
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
	}


	public function editar(){
		$model = new ResponsavelModel();

		$id = $this->request->getVar('idresponsavel');

		$data = [
			'nomeresponsavel' => $this->request->getVar('nomeresponsavel'),
			'origemresponsavel' => $this->request->getVar('origemresponsavel')
		];

		$model->update($id,$data);
		return redirect()->to(base_url('admin/responsavel'));
	}


	public function gravar(){
		$model = new ResponsavelModel();

		helper('form');

		if($this->validate([
			'nomeresponsavel' => ['label' => 'nomeresponsavel', 'rules' => 'required|min_length[3]|is_unique[responsavel.nomeresponsavel]|alpha_space|max_length[20]'],
			'origemresponsavel' => ['label' => 'origemresponsavel', 'rules' => 'required|min_length[3]|alpha|max_length[20]']
			]))
		{

			$id = $this->request->getVar('idresponsavel');
			$nomeresponsavel = $this->request->getVar('nomeresponsavel');
			$origemresponsavel = $this->request->getVar('origemresponsavel');


			$model->save([
				'idresponsavel' => $id,
				'nomeresponsavel' => $nomeresponsavel,
				'origemresponsavel' => $origemresponsavel

			]);

			$data = [
				'title' => 'Responsável',
				'responsavel' => $model->getResponsavel(),
				'msg' => 'Responsável Cadastrado!'
			];

			echo view('backend/templates/html-header', $data);
			echo view('backend/templates/header');
			echo view('backend/pages/responsavel', $data);
			echo view('backend/templates/footer');
			echo view('backend/templates/html-footer');



		}else{

			$data = [
				'title' => 'Responsável',
				'responsavel' => $model->getResponsavel(),
				'msg' => 'Erro ao Cadastrar o Responsável!'
			];

		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/responsavel');
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
		}
	}

	public function excluir ($id = null){
		$model = new ResponsavelModel();

		$model->delete($id);
		return redirect()->to(base_url('admin/Responsavel'));
	}
	



	//--------------------------------------------------------------------

}
