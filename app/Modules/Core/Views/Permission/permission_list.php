<h1><?php echo lang('Auth.permission_list_heading');?></h1>

<div>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>id_group</th>
                <th>permission_id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permission as $permission){?>
                <tr>
                    <td><?=$permission['id']?></td>
                    <td><?=$permission['group_id']?></td>
                    <td><?=$permission['permission_id']?></td>
                    <td><a href="permission/edit_permission/<?= $permission['id']?>">edit</a></td>
                    <td><a href="permission/delete_permission/<?= $permission['id']?>">hapus</a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <p><?php echo anchor('auth/permission/add_permission', 'Add Permission') ?></p>
</div>



