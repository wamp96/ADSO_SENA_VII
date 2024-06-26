<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AddPermissionsModules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Permissions_modules_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'RoleModules_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' =>true,
                'null' => true,
            ],
            'Permissions_fk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' =>true,
                'null' => true,
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
        $this->forge->addPrimaryKey('Permissions_modules_id');
        $this->forge->createTable('permissions_modules');
        $this->forge->addForeignKey('RoleModules_fk','role_modules','RoleModules_id','CASCADE','SET NULL', 'fk_role_modules');
        $this->forge->addForeignKey('Permissions_fk','permissions','Permissions_id','CASCADE','SET NULL', 'fk_permissions');
    }

    public function down()
    {
        $this->forge->dropTable('permissions_modules');
    }
}
