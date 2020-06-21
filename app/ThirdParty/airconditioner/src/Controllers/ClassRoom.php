<?php namespace AirConditioner\Controllers;

use AirConditioner\Domain\ClassRoom\ClassRoomRepository;
use AirConditioner\Domain\Exception\RecordNotFoundException;
use AirConditioner\Models\ClassRoomModel;
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Services;

class ClassRoom extends BaseController
{
	/** @var ClassRoomRepository */
	private $repository;

	public function __construct()
	{
		$this->repository = Services::classroomRepository();
	}

    public function index()
    {
        return view('AirConditioner\Views\classroom\index');
    }
}
