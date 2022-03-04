<?php
namespace App\Modules\Core\Models;
use App\Controllers\BaseController;
use CodeIgniter\Model;

class GroupsModel extends Model{
    protected $table = 'groups';
    protected $primaryKey = 'id';

    // protected $returnType = 'object';
    // protected $allowedFields = ['id', 'group_id', 'permissions_id'];

    // protected $useTimestamps = false;

    // protected $validationRules = [];
    // protected $validationsMessages=[];
    // protected $skipValidation = false;
}
