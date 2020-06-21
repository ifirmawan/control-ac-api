<?php namespace AirConditioner\Domain\AirConditioner;

use CodeIgniter\Entity;

/**
 * @property int $id
 * @property string $active
 * @property string $temp
 */
class AirConditioner extends Entity
{
	protected $attributes = [
		'id'     => null,
		'class_room_id' => null,
		'name' => null,
		'active'  => 0,
		'temp'  => 0,
		'wind'  => 0,
	];

	public function setName(string $name): self
	{
		$this->attributes['name'] = $name;
		return $this;
	}

	public function setActive(bool $active): self
	{
		$this->attributes['active'] = $active;
		return $this;
	}

	public function setTemp(int $temp): self
	{
		$this->attributes['temp'] = $temp;
		return $this;
	}

	public function setWind(int $wind)
	{
		$this->attributes['wind'] = $wind;
		return $this;
	}
}
