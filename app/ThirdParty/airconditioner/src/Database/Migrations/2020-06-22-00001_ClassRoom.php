<?php namespace AirConditioner\Database\Migrations;

use CodeIgniter\Database\Migration;

class ClassRoom extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'     => [
				'type'           => 'BIGINT',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name' => [
				'type'       => 'VARCHAR',
				'constraint' => '191',
			],
			'temp'  => [
				'type'       => 'INT',
				'constraint' => '11',
			],
			'temp_unit'  => [
				'type'       => 'VARCHAR',
				'constraint' => '11',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('classrooms');
	}

	public function down()
	{
		$this->forge->dropTable('classrooms');
	}
}
