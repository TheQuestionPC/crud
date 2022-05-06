<?php
namespace App\Models;
use CodeIgniter\Model;

class TipoModel extends Model{
	//Atributos de Configuração
	protected $table = 'tipo';
	protected $allowedFields = ['nometipo'];
	protected $primaryKey = 'idtipo';

	protected $useSoftDeletes = true;
	protected $useTimestamps = true;
	protected $dateFormat = 'datetime';
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';


	//Metodo GET	
	public function getTipo($id = false){
		if($id == false){
			return $this->findAll();
		}
		else{
			return $this->asArray()
							->where(['idtipo'=>$id])
							->first(); 
		}
		}
	}