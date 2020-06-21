<?php namespace AirConditioner\Domain\AirConditioner;

use AirConditioner\Domain\ClassRoom\ClassRoom;
use AirConditioner\Domain\DMLRepository;

interface AirConditionerRepository extends DMLRepository
{
	public function findPaginatedData(ClassRoom $classroom,string $keyword = ''): ?array;
	public function findAirConditionerOfId(int $id): AirConditioner;
}
