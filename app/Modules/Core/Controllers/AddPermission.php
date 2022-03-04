<?php

namespace App\Modules\Core\Controllers;
use App\Controllers\BaseController;
use \App\Modules\Core\Models\GroupsModel;
use \App\Modules\Core\Models\PermissionModel;
use \App\Modules\Core\Models\GroupPermissionModel;

class AddPermission extends BaseController
{
    protected $dataGroupModel;
    protected $dataPermissionModel;
    protected $groupPermissionModel;
    public function __construct(){

        $this->dataGroupModel= new GroupsModel();
        $this->dataPermissionModel= new PermissionModel();
        $this->groupPermissionModel = new GroupPermissionModel();
    }
    public function index()
    {
        $data=array();
        $result_group = $this->dataGroupModel->findAll();
        $data['group'] = $result_group; 
        $result_permission = $this->dataPermissionModel->findAll();
        $data['permission'] = $result_permission; 
        
        echo view('\App\Modules\Core\Views\Permission\add_permission.php', $data);
        
        
    }

    public function CreatePermission()
    {
        $data = [
            'group_id' => $this->request->getPost('id_group'),
            'permission_id'=> $this->request->getPost('id_permission'),
        ];
        $this->groupPermissionModel->insert($data);
        
        return redirect()->to(base_url('auth/permission_list'));

    }

    
}
