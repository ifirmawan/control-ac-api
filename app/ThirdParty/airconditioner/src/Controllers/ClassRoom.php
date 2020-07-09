<?php
namespace AirConditioner\Controllers;

use AirConditioner\Models\ClassRoomModel;
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class ClassRoom extends BaseController
{
	protected $classroom_model;

	public function __construct()
	{
		$this->classroom_model = new ClassRoomModel;
	}

    public function index()
    {
		$table = new \CodeIgniter\View\Table();
		$template = config('TableBootstrap')->getTemplate();
		$table->setTemplate($template);

		$heading = ['No', 'Class', 'Section', 'Floor','Action'];
		$table->setHeading($heading);

		$view = \Config\Services::renderer();
		$action = $view->render('AirConditioner\Views\actions/classroom');

		$items = $this->classroom_model->select(['id','name','section','floor']);
		$items = $this->handleFilterSection($items);
		$items = $items->orderBy('name','asc');
		$items = $items->findAll();

		foreach ($items as $key => $value) {
			$view = \Config\Services::renderer();
			$action = $view->setData(['classroom_id' => $value['id']])->render('AirConditioner\Views\actions\classroom');
			array_push($value, $action);
			$table->addRow($value);
		}

		$data['table'] = $table;
		$data['section'] = $this->classroom_model->select('section')->distinct(true)->findAll();
		$data['floor'] = $this->classroom_model->select('floor')->distinct(true)->findAll();
        return view('AirConditioner\Views\classroom\index', $data);
    }

	private function handleFilterSection($items)
	{
		if ($this->request->getGet('s')) {
			$items = $items->where('section', $this->request->getGet('s'));
		}
		return $items;
	}

	private function handleFilterFloor($items)
	{
		if ($this->request->getGet('f')) {
			$items = $items->where('floor', $this->request->getGet('f'));
		}
		return $items;
	}

	public function create()
	{
		return view('AirConditioner\Views\classroom\create');
	}

	public function store()
	{
		$data = $this->request->getPost();
		$this->classroom_model->save($data);
		return redirect()->route('classroom.index');
	}

	public function edit(int $id)
	{
		$classroom = $this->classroom_model->find($id);
		$data['classroom'] = $classroom;
		if ($this->request->getMethod() === 'post')
		{
			$data = $this->request->getPost();
			$this->classroom_model->update($classroom['id'], $data);
			return redirect()->route('classroom.index');
		}
		return view('AirConditioner\Views\classroom\create', $data);
	}

	public function delete(int $id)
	{
		$this->classroom_model->delete($id);
		return redirect()->route('classroom.index');
	}
}
