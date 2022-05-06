<?php
namespace App\Models;
use CodeIgniter\Model;

class ResponsavelModel extends Model{
	//Atributos de Configuração
	protected $table = 'responsavel';
	protected $allowedFields = ['nomeresponsavel','origemresponsavel'];
	protected $primaryKey = 'idresponsavel';

	protected $useSoftDeletes = true;
	protected $useTimestamps = true;
	protected $dateFormat = 'datetime';
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';


	//Metodo GET	
	public function getResponsavel($id = false){
		if($id == false){
			return $this->findAll();
		}
		else{
			return $this->asArray()
							->where(['idresponsavel'=>$id])
							->first(); 
		}
		}
	}