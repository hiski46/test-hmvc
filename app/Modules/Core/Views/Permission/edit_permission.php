<h1>Edit Permision Group</h1>

<form action="update_permission/<?=$id?>" method="post">
    <label for="id_group">Group</label>
    <select name="id_group" id="id_group">
        <?php foreach ($group as $groups){ ?>
            <option value=<?= $groups['id'] ?> ><?= $groups['name']?></option>
       <?php }?> 
    </select>
    <br>
    <label for="id_permission">Permission</label>
    <select name="id_permission" id="id_permission">
        <?php foreach ($permission as $permission){ ?>
            <option value="<?= $permission['id'] ?>" ><?= $permission['name']?></option>
       <?php }?> 
    </select>
    <br>
    <input type="submit" name="submit" value="submit">
</form>