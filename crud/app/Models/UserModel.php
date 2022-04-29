<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
	//Atributos de Configuração
	protected $table = 'usuarios';
	protected $allowedFields = ['user','senha'];

	//Metodo GET	
	public function getUser($user,$senha){
			return $this->asArray()
						->where(['user'=>$user, 'senha'=> md5($senha)])
						->first(); 
		}
	}