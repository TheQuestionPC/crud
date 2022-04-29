<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TipoModel;


class Tipo extends BaseController
{
	public function index()
	{
		$model = new TipoModel();
		$data = [
				'title' => 'Tipo',
				'tipo' => $model->paginate(5),
				'pager' => $model->pager,
				'msg' => ''
			];
		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/tipo');
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
	}


	public function editar(){
		$model = new TipoModel();

		$id = $this->request->getVar('idtipo');

		$data = [
			'nometipo' => $this->request->getVar('nometipo')
		];

		$model->update($id,$data);
		return redirect()->to(base_url('admin/tipo'));
	}


	public function gravar(){
		$model = new TipoModel();

		helper('form');

		if($this->validate([
			'nometipo' => ['label' => 'Tipo', 'rules' => 'required|min_length[3]']
			]))
		{

			$id = $this->request->getVar('idtipo');
			$nometipo = $this->request->getVar('nometipo');


			$model->save([
				'idtipo' => $id,
				'nometipo' => $nometipo
			]);

			$data = [
				'title' => 'Tipo',
				'tipo' => $model->paginate(5),
				'pager' => $model->pager,
				'msg' => 'Tipo Cadastrado!'
			];

			echo view('backend/templates/html-header', $data);
			echo view('backend/templates/header');
			echo view('backend/pages/tipo');
			echo view('backend/templates/footer');
			echo view('backend/templates/html-footer');



		}else{

			$data = [
				'title' => 'Tipo',
				'tipo' => $model->paginate(5),
				'pager' => $model->pager,
				'msg' => 'Erro ao Cadastrar o Tipo!'
			];

		echo view('backend/templates/html-header', $data);
		echo view('backend/templates/header');
		echo view('backend/pages/tipo');
		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
		}
	}

	public function excluir ($id = null){
		$model = new TipoModel();

		$model->delete($id);
		return redirect()->to(base_url('admin/tipo'));
	}
	



	//--------------------------------------------------------------------

}
