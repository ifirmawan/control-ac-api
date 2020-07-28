<?php
namespace AirConditioner\Models;

use CodeIgniter\Model;

class ClassRoomModel extends Model
{
	protected $table           	= 'classrooms';
    protected $primaryKey 		= 'id';
	protected $returnType     	= 'array';
	protected $allowedFields   	= [
		'name',
		'section',
		'floor'
	];

	protected $validationRules = [
		'name'  => 'required|alpha_numeric_space|min_length[3]|max_length[255]|is_unique[classrooms.name,id,{id}]',
		'section' => 'alpha_numeric_space',
		'floor' => 'numeric'
	];
	protected $useTimestamps = true;
	protected $useSoftDeletes = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
}
