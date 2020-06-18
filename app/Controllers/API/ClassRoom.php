<?php namespace App\Controllers\API;

use CodeIgniter\API\ResponseTrait;
class ClassRoom extends \CodeIgniter\Controller
{
	use ResponseTrait;

	public function index()
	{
        $data = [
            'message' => 'Hello world'
        ];
        return $this->respond($data,200);
	}

	public function store()
	{
		$json = $this->request->getJSON();
		return $this->respond($json, 200);
	}
}
