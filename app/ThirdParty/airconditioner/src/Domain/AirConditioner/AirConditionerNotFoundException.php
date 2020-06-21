<?php namespace AirConditioner\Domain\AirConditioner;

use AirConditioner\Domain\Exception\RecordNotFoundException;

class AirConditionerNotFoundException extends RecordNotFoundException
{
	public final static function forAirConditionerDoesnotExistOfId(int $id): self
	{
		return new self(sprintf(
			'The AirConditioner with ID %d you requested does not exist.',
			$id
		));
	}
}
