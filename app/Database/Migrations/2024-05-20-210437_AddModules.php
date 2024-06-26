<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AddModules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Modules_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Module_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Module_description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Module_route' => [
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => true,
            ],
            'Module_icon' => [
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => true,
            ],
            'Module_submodule' => [
                'type' => 'tinyint',
                'constraint' => 3,
                'null' => 0,
                'default' => 0,
            ],
            'Module_parent_module' => [
                'type' => 'VARCHAR',
                'constraint' => 80,
                'null' => true,
                'default' => null,
            ],
            'create_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'update_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('Modules_id', true);
        $this->forge->createTable('modules');
    }

    public function down()
    {
        //
    }
}
