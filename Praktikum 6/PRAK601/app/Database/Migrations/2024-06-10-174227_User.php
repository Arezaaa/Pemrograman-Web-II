<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
	{
		$this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
			'username'           => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'email'           => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password'           => [
				'type'           => 'TEXT',
				'constraint'     => '255',
			],

		]);
        // Membuat primary key
        $this->forge->addKey('id', TRUE);
		$this->forge->createTable('user');
	}
	//--------------------------------------------------------------------
	public function down()
	{
		$this->forge->dropTable('user');
	}
}