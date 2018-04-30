<div class="page-header">
    <div class="row">
        <div class="col-6">
            <h3>Users</h3>
        </div>
        <div class="col-6 text-right">
          <a href="<?= $this->Url->build('users/add')?>" class="btn btn-secondary">New</a>
          <button class="btn btn-secondary" id="del-user">Remove</button>
        </div>
    </div>
</div>
<?= $this->Form->create() ?>
<div class="block margin-bottom-sm">
    <div class="table-responsive">
        <table class="table" id="user-table">
            <thead>
            <tr>
                <th width="30">#</th>
                <th>User name</th>
                <th>Email Address</th>
                <th>User Id</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) : $roles = \Cake\Core\Configure::read('Roles');?>
                <tr>
                    <th scope="row"><?= $user->id ?>&nbsp;&nbsp;&nbsp;<?= $this->Form->checkbox('chk_name[]') ?></th>
                    <td><?= $user->full_name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $roles[$user->role] ?></td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <a class="dropdown-item btn btn-secondary" href="<?=$this->Url->build(['controller' => 'users','action' => 'edit', $user->id])?>">Edit</a>
                          <a class="dropdown-item btn btn-secondary">Delete</a>
                        </div>
                      </div>
                    </td>
                </tr>
            <?php endforeach;?>

            </tbody>
        </table>
    </div>
</div>
<?= $this->Form->end()?>
<script>
    $(function() {
        $('#user-table').DataTable();

        $('#del-user').click(function() {
            var result = confirm('Are you sure to delete selected users?');
            if(result) {

            }

        });
    });
</script>