<?php namespace AirConditioner\Domain\ClassRoom;

use AirConditioner\Domain\Exception\RecordNotFoundException;

class ClassRoomNotFoundException extends RecordNotFoundException
{
	public final static function forClassRoomDoesnotExistOfId(int $id) : self
	{
		return new self(sprintf(
			'The album ClassRoom with ID %d you requested does not exist.',
			$id
		));
	}
}
