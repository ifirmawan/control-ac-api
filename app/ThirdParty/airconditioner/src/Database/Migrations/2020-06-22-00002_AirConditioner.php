<?php namespace AirConditioner\Database\Migrations;

use CodeIgniter\Database\Migration;

class AirConditioner extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'     => [
				'type'           => 'BIGINT',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'class_room_id' => [
				'type'       => 'BIGINT',
				'unsigned'   => true,
			],
			'name' => [
				'type'       => 'VARCHAR',
				'constraint' => '191',
			],
			'active'  => [
				'type'       => 'TINYINT',
				'constraint' => '1',
			],
			'temp'  => [
				'type'       => 'INT',
				'constraint' => '11',
			],
			'wind'  => [
				'type'       => 'INT',
				'constraint' => '11',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('class_room_id', 'classrooms', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('air_conditioners');
	}

	public function down()
	{
		$this->forge->dropTable('air_conditioners');
	}
}
