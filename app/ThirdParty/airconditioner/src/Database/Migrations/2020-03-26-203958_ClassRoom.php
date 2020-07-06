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
			'section' => [
				'type'       => 'VARCHAR',
				'constraint' => '191',
				'null'      => true,
			],
			'floor' => [
				'type'       => 'INT',
				'constraint' => '5',
				'null'      => true
			],
			'name' => [
				'type'       => 'VARCHAR',
				'constraint' => '191',
			],
			'temp'  => [
				'type'       => 'decimal',
				'constraint' => '8,3',
			],
			'temp_unit'  => [
				'type'       => 'VARCHAR',
				'constraint' => '5',
				'null' => true,
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
		$this->forge->createTable('classrooms');
	}

	public function down()
	{
		$this->forge->dropTable('classrooms');
	}
}
