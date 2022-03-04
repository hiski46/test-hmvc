<?php
namespace App\Modules\Core\Models;
use App\Controllers\BaseController;
use CodeIgniter\Model;

class GroupPermissionModel extends Model{
    protected $table = 'groups_permissions';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['group_id', 'permissions_id'];
    protected $insertId = 0;

    // protected $useTimestamps = false;

    // protected $validationRules = [];
    // protected $validationsMessages=[];
    // protected $skipValidation = false;
}
