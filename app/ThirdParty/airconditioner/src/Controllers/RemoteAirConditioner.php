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
        return view('AirConditioner\Views\remote-ac\show');
    }
}
