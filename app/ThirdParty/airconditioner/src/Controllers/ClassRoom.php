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
		$table = new \CodeIgniter\View\Table();
		$template = config('TableBootstrap')->getTemplate();
		$table->setTemplate($template);

		$heading = ['No', 'Class', 'Section', 'Floor', 'AC Item(s)', 'Action'];
		$table->setHeading($heading);

		$view = \Config\Services::renderer();
		$action = $view->render('AirConditioner\Views\actions/classroom');
		$data = [1, 'TT105', 'Telecomunication', '1st', '2', $action ];
		$table->addRow($data);

		$data['table'] = $table;
        return view('AirConditioner\Views\classroom\index', $data);
    }

	public function create()
	{
		return view('AirConditioner\Views\classroom\create');
	}
}
