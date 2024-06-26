<?php

namespace App\Models;

use CodeIgniter\Model;

class PermissionModulesModel extends Model
{
    protected $table            = 'permissions_modules';
    protected $primaryKey       = 'Permissions_modules_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['Permissions_modules_id','RoleModules_fk','Permissions_fk','update_at'];

    protected bool $allowEmptyInserts = false;
    
    // Dates
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
}
