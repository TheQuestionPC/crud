<?php
namespace App\Models;
use CodeIgniter\Model;

class CadastroModel extends Model{
	//Atributos de Configuração
	protected $table = 'cadastro';
	protected $allowedFields = ['nomecadastro','email','statuscadastro','fotocadastro','tipo','responsavel','img'];
	protected $primaryKey = 'idcadastro';

	protected $useSoftDeletes = true;
	protected $useTimestamps = true;
	protected $dateFormat = 'datetime';
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';


	//Metodo GET	
	public function getCadastro($id = false){
		if($id == false){
			return $this->findAll();
		}
		return $this->findAll();
			return $this->asArray()
							->where(['idcadastro'=>$id])
							->first(); 
		}
	}