<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel buku
        $this->forge->addField([
            'id'          => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'judul'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'penulis'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'penerbit'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'tahun_terbit'      => [
                'type'           => 'INT',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('buku', TRUE);
}

//---------------------

    public function down()
	{
		// menghapus tabel buku
		$this->forge->dropTable('buku');
	}
}