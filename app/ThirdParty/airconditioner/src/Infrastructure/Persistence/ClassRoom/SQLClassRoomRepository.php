<?php namespace AirConditioner\Infrastructure\Persistence\ClassRoom;

use AirConditioner\Domain\ClassRoom\ClassRoom;
use AirConditioner\Domain\ClassRoom\ClassRoomNotFoundException;
use AirConditioner\Domain\ClassRoom\ClassRoomRepository;
use AirConditioner\Infrastructure\Persistence\DMLPersistence;
use AirConditioner\Models\ClassRoomModel;

class SQLClassRoomRepository implements ClassRoomRepository
{
	use DMLPersistence;

	/** @var ClassRoomModel */
	protected $model;

	public function __construct(ClassRoomModel $model)
	{
		$this->model = $model;
	}

	public function findPaginatedData(string $keyword = ''): ? array
	{
		if ($keyword)
		{
			$this->model
				 ->builder()
				 ->groupStart()
					 ->like('name', $keyword)
					 ->orLike('temp', $keyword)
				 ->groupEnd();
		}

		return $this->model->paginate(config('AirConditioner')->paginationPerPage);
	}

	public function findClassRoomOfId(int $id): ClassRoom
	{
		$classroom = $this->model->find($id);
		if (! $classroom instanceof ClassRoom)
		{
			throw ClassRoomNotFoundException::forClassRoomDoesnotExistOfId($id);
		}

		return $classroom;
	}

	public function deleteOfId(int $id) : bool
	{
		$delete = $this->model->delete($id);
		if ($this->model->db->affectedRows() === 0)
		{
			throw ClassRoomNotFoundException::forClassRoomDoesnotExistOfId($id);
		}

		return true;
	}
}
