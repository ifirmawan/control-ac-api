<?php namespace AirConditioner\Models;

use AirConditioner\Domain\ClassRoom\ClassRoom;
use CodeIgniter\Model;

/**
 * @property-read \CodeIgniter\Database\MySQLi\Connection $db
 */
class ClassRoomModel extends Model
{
	protected $table           = 'classrooms';
	protected $returnType      = ClassRoom::class;
	protected $allowedFields   = [
		'name',
		'temp_room',
	];
	protected $validationRules = [
		'name'  => 'required|alpha_numeric_space|min_length[3]|max_length[255]|is_unique[AirConditioner.title,id,{id}]',
		'temp_room' => 'required|numeric',
	];
}
