<?php namespace AirConditioner\Database\Migrations;

use CodeIgniter\Database\Migration;

class AirConditionerTable extends Migration
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
				'default' => 0
			],
			'temp'  => [
				'type'       => 'decimal',
				'constraint' => '8,3',
				'default' => 0
			],
			'wind'  => [
				'type'       => 'VARCHAR',
				'constraint' => '11',
				'null'      => true
			],
			'created_at' => [
				'type' => 'DATE'
			],
			'update_at' => [
				'type' => 'DATE'
			],
			'delete_at' => [
				'type' => 'DATE'
			]
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
