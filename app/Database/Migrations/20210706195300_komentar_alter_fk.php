<?php namespace App\Database\Migrations;

class TransaksiAlterFK extends \CodeIgniter\Database\Migration {

        public function up()
        {
            $this->forge->dropForeignKey('komentar','komentar_id_barang_foreign');
            $this->forge->dropForeignKey('komentar','komentar_id_pembeli_foreign');

            $this->forge->addColumn('komentar',[
                'CONSTRAINT komentar_id_pembeli_foreign FOREIGN KEY (id_pembeli) REFERENCES user(id) ON DELETE NO ACTION ON UPDATE CASCADE',
            ]);
            $this->forge->addColumn('komentar',[
                'CONSTRAINT komentar_id_barang_foreign FOREIGN KEY (id_barang) REFERENCES barang(id) ON DELETE NO ACTION ON UPDATE CASCADE',
            ]);
        }
        
        public function down()
        {
            $this->forge->addColumn('komentar',[
                'CONSTRAINT komentar_id_pembeli_foreign FOREIGN KEY (id_pembeli) REFERENCES user(id)',
            ]);
            $this->forge->addColumn('komentar',[
                'CONSTRAINT komentar_id_barang_foreign FOREIGN KEY (id_barang) REFERENCES barang(id)',
            ]);
        }
}