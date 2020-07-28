<?php namespace AirConditioner\Models;

use CodeIgniter\Model;

/**
* @property-read \CodeIgniter\Database\MySQLi\Connection $db
*/
class AirConditionerModel extends Model
{
	protected $table           = 'air_conditioners';
	protected $returnType     = 'array';
	protected $allowedFields   = [
		'class_room_id',
		'name',
		'temp'
	];
	protected $validationRules = [
		'class_room_id' => 'required|numeric',
		'name'    => 'required|min_length[3]|max_length[191]|is_unique[air_conditioners.name,id,{id}]',
	];
	protected $useTimestamps = true;
	protected $useSoftDeletes = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
}
