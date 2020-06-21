<?php namespace AirConditioner\Models;

use AirConditioner\Domain\AirConditioner\AirConditioner;
use CodeIgniter\Model;

/**
 * @property-read \CodeIgniter\Database\MySQLi\Connection $db
 */
class AirConditionerModel extends Model
{
	protected $table           = 'air_conditioners';
	protected $returnType      = AirConditioner::class;
	protected $allowedFields   = [
		'class_room_id',
		'name',
	];
	protected $validationRules = [
		'album_id' => 'required|numeric',
		'name'    => 'required|alpha_numeric_space|min_length[3]|max_length[255]|is_unique[air_conditioners.name,id,{id}]',
	];
}
