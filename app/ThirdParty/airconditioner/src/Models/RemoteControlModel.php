<?php namespace AirConditioner\Models;

use CodeIgniter\Model;

/**
* @property-read \CodeIgniter\Database\MySQLi\Connection $db
*/
class RemoteControlModel extends Model
{
	protected $table = 'remote_controls';
	protected $primaryKey = 'id';

	protected $returnType     = 'array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['request', 'response','temp_value','wind_value'];

	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;
}
