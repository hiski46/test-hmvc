<?php

namespace App\Modules\Core\Controllers;
use App\Controllers\BaseController;
use \App\Modules\Core\Models\GroupPermissionModel;

class PermissionList extends BaseController
{
    protected $permissionGroupModel;
    public function __construct(){

        $this->permissionGroupModel= new GroupPermissionModel();
    }
    public function index()
    {
        $data=array();
        $result = $this->permissionGroupModel->findAll();
        $data['permission'] = $result; 
        echo view('\App\Modules\Core\Views\Permission\permission_list.php', $data);
        
        
    }
    public function DeletePermission($id)
    {
        $this->permissionGroupModel->delete($id);
        return redirect()->to(base_url('auth/permission_list'));
    }
    
}
