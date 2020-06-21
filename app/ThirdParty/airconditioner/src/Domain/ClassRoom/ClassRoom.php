<?php namespace AirConditioner\Domain\ClassRoom;

use CodeIgniter\Entity;

/**
 * @property int $id
 * @property int $album_id
 * @property string $name
 * @property string $author
 */
class ClassRoom extends Entity
{
	protected $attributes = [
		'id'       => null,
		'name' => null,
		'temp'    => null,
		'temp_unit'   => 'C',
	];

	public function setName(string $name): self
	{
		$this->attributes['name'] = $name;
		return $this;
	}

	public function setTemp(int $temp): self
	{
		$this->attributes['temp'] = $temp;
		return $this;
	}

	public function setTempUnit(string $unit): self
	{
		$this->attributes['temp_unit'] = $unit;
		return $this;
	}
}
