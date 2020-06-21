<?php namespace AirConditioner\Controllers;

use AirConditioner\Domain\AirConditioner\AirConditionerRepository;
use AirConditioner\Domain\Exception\RecordNotFoundException;
use AirConditioner\Models\AirConditionerModel;
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Services;

class RemoteAirConditioner extends BaseController
{
	/** @var AirConditionerRepository */
	private $repository;

	public function __construct()
	{
		$this->repository = Services::airconditionerRepository();
	}

    public function index()
    {
        echo "remote ac";
    }
}
