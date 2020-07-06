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
			'ac_id' => [
				'type'       => 'BIGINT',
				'unsigned'   => true,
			],
			'request' => [
				'type'       => 'VARCHAR',
				'constraint' => '191',
			],
			'response'  => [
				'type'       => 'VARCHAR',
				'constraint' => '191',
			],
			'temp_value'  => [
				'type'       => 'VARCHAR',
				'constraint' => '11',
				'null'      => true
			],
			'wind_value'  => [
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
		$this->forge->addForeignKey('ac_id', 'air_conditioners', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('remote_controls');
	}

	public function down()
	{
		$this->forge->dropTable('remote_controls');
	}
}
