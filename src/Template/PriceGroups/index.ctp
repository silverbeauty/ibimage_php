<div class="page-header">
    <div class="row">
        <div class="col-6">
            <h3>Price Groups</h3>
        </div>
        <div class="col-6 text-right">
            <?= $this->Html->link(__('New Price Group'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>

        </div>
    </div>
</div>
<?= $this->Form->create(null, ['url' => ['action' => 'delete'], 'id' => 'user-form']) ?>
<div class="block margin-bottom-sm">
    <div class="table-responsive">
        <table class="table" id="user-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Group name</th>
                <th>Description</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php $index = 0; foreach ($priceGroups as $priceGroup): $index++?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= h($priceGroup->group_name) ?></td>
                    <td><?= h($priceGroup->description) ?></td>
                    <td><?= h($priceGroup->is_active) ?></td>
                    <td class="actions">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $priceGroup->id], ['class' => 'dropdown-item btn btn-secondary']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $priceGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceGroup->id), 'class' => 'dropdown-item btn btn-secondary']) ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>


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
                $('#user-form').submit();
            }

        });
    });
</script>

