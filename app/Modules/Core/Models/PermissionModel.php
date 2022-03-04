<?php
namespace App\Modules\Core\Models;
use App\Controllers\BaseController;
use CodeIgniter\Model;

class PermissionModel extends Model{
    protected $table = 'permissions';
    protected $primaryKey = 'id';

}
