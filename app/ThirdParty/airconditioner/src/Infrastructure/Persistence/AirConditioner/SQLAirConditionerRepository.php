<?php namespace AirConditioner\Infrastructure\Persistence\AirConditioner;

use AirConditioner\Domain\ClassRoom\ClassRoom;
use AirConditioner\Domain\AirConditioner\AirConditioner;
use AirConditioner\Domain\AirConditioner\AirConditionerNotFoundException;
use AirConditioner\Domain\AirConditioner\AirConditionerRepository;
use AirConditioner\Infrastructure\Persistence\DMLPersistence;
use AirConditioner\Models\AirConditionerModel;

class SQLAirConditionerRepository implements AirConditionerRepository
{
	use DMLPersistence;

	/** @var AirConditionerModel */
	protected $model;

	public function __construct(AirConditionerModel $model)
	{
		$this->model = $model;
	}

	public function findPaginatedData(ClassRoom $classroom, string $keyword = ''): ?array
	{
		$this->model
			 ->builder()
			 ->where('class_room_id', $classroom->id);

		if ($keyword)
		{
			$this->model
				 ->builder()
				 ->groupStart()
					 ->like('name', $keyword)
					 ->orLike('temp', $keyword)
					 ->orLike('wind', $keyword)
				 ->groupEnd();
		}

		return $this->model->paginate(config('AirConditioner')->paginationPerPage);
	}

	public function findAirConditionerOfId(int $id): AirConditioner
	{
		$AirConditioner = $this->model->find($id);
		if (! $AirConditioner instanceof AirConditioner)
		{
			throw AirConditionerNotFoundException::forAirConditionerDoesnotExistOfId($id);
		}

		return $AirConditioner;
	}

	public function deleteOfId(int $id) : bool
	{
		$delete = $this->model->delete($id);
		if ($this->model->db->affectedRows() === 0)
		{
			throw AirConditionerNotFoundException::forAirConditionerDoesnotExistOfId($id);
		}

		return true;
	}
}
