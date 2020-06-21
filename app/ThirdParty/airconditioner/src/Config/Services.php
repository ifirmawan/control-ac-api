<?php namespace AirConditioner\Config;

use AirConditioner\Infrastructure\Persistence\AirConditioner\SQLAirConditionerRepository;
use AirConditioner\Infrastructure\Persistence\ClassRoom\SQLClassRoomRepository;
use AirConditioner\Models;
use CodeIgniter\Config\BaseService;

class Services extends BaseService
{
	public static function airconditionerRepository($getShared = true)
	{
		if ($getShared)
		{
			return static::getSharedInstance('airconditionerRepository');
		}

		return new SQLAirConditionerRepository(model(Models\AirConditionerModel::class));
	}

	public static function classroomRepository($getShared = true)
	{
		if ($getShared)
		{
			return static::getSharedInstance('classroomRepository');
		}

		return new SQLClassRoomRepository(model(Models\ClassRoomModel::class));
	}
}
