<?php namespace App\Database\Migrations;

use CodeIgniter\CodeIgniter;
use PhpParser\Node\Expr\FuncCall;

class Komentar extends \CodeIgniter\Database\Migration{

    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>16,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'id_barang'=>[
                'type'=>'INT',
                'constraint'=>16,
                'unsigned'=>TRUE,
            ],
            'id_user'=>[
                'type'=>'INT',
                'constraint'=>16,
                'unsigned'=>TRUE,
            ],
            'komentar'=>[
                'type'=>'TEXT',
            ],
            'created_by'=>[
                'type'=>'INT',
                'constraint'=>16,
            ],
            'created_date'=>[
                'type'=>'DATETIME',
            ],
            'updated_by'=>[
                'type'=>'INT',
                'constraint'=>16,
                'null'=>TRUE
            ],
            'update_date'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ]
        ]);

        $this->forge->addKey('id',TRUE);
        $this->forge->addForeignKey('id_user','user','id');
        $this->forge->addForeignKey('id_barang','barang','id');
        $this->forge->createTable('komentar');
    }

    public function down(){
        $this->forge->dropTable('komentar');

    }
}
?>