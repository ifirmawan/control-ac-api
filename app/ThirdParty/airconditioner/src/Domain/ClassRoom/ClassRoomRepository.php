<?php namespace AirConditioner\Domain\ClassRoom;

use AirConditioner\Domain\DMLRepository;

interface ClassRoomRepository extends DMLRepository
{
	public function findPaginatedData(string $keyword = ''): ?array;
	public function findClassRoomOfId(int $id): ClassRoom;
}
