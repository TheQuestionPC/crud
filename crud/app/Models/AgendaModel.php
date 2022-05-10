<?php
namespace App\Models;
use CodeIgniter\Model;

class AgendaModel extends Model{
	//Atributos de Configuração
	protected $table = 'agenda';
	protected $returnType = 'array';
	protected $allowedFields = ['titulo','confirmado','responsavel', 'start', 'end'];
	protected $primaryKey = 'idagenda';

	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';


	//Metodo GET	
	public function recuperaAgenda(array $dataGet){
		return $this
			->where('start >', $dataGet['start'])
			->where('end <', $dataGet['end'])
			-> findAll();
	}

	public function cadastraAgenda(string $coluna, string $titulo, int $id, int $dias){
		$evento = [
			'$coluna' => $id,
			'title' => $titulo,
			'start' => date('Y-m-d', strtotime('+$dias days', time())),
			'end' => date('Y-m-d', strtotime('+$dias days', time())),
		];
		return $this->insert($evento);
	}

	public function atualizaAgenda(string $coluna, int $id, int $dias){
		return $this->protected(false)
					->where($coluna, $id)
					->set('start', date('Y-m-d', strtotime('+$dias days', time())))
					->set('end', date('Y-m-d', strtotime('+$dias days', time())))
					->update();
	}

}