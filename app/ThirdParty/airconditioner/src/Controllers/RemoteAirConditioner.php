<?php
namespace AirConditioner\Controllers;

use AirConditioner\Models\AirConditionerModel;
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class RemoteAirConditioner extends BaseController
{
	protected $ac_model;

	public function __construct()
	{
		$this->ac_model = new AirConditionerModel;
	}

    public function show(int $id)
    {
		$db = \Config\Database::connect();

		$builder = $db->table('air_conditioners');
		$builder = $builder->select('air_conditioners.*,classrooms.id as class_id, classrooms.name as class_name, classrooms.temp as class_temp, classrooms.floor, classrooms.section');
		$builder = $builder->where('air_conditioners.class_room_id', $id);
		$builder = $builder->join('classrooms', 'air_conditioners.class_room_id = classrooms.id');
		$data['air_conditioners'] = $builder->get();
		$data['class_room_id'] = $id;
        return view('AirConditioner\Views\remote-ac\show',$data);
    }

	public function store()
	{
		$validation =  \Config\Services::validation();
		$validation->setRule('name', 'AC name', 'required');
		if ($validation->withRequest($this->request)->run()) {
			$data = $this->request->getPost();
			if (!is_numeric($data['temp'])) {
				$data['temp'] = 0;
			}
			$this->ac_model->save($data);
			return redirect()->route('ac.show', [$data['class_room_id']]);
		}else{
			$data = $this->request->getPost();
			return redirect()->route('ac.show', [$data['class_room_id']]);
		}
	}
}
