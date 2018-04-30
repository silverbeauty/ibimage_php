<div class="page-header">
    <div class="row">
        <div class="col-6">
            <h3>Users</h3>
        </div>
        <div class="col-6 text-right">
          <a href="<?= $this->Url->build('users/add')?>" class="btn btn-secondary">New</a>
          <a class="btn btn-secondary">Remove</a>
        </div>
    </div>
</div>

<div class="block margin-bottom-sm">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
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
                    <th scope="row"><?= $user->id ?></th>
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