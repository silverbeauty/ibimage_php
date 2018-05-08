<div class="page-header">
    <div class="row">
        <div class="col-6">
            <h3>Meta Keys</h3>
        </div>
        <div class="col-6 text-right">
            <?= $this->Html->link(__('New Meta Key'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
            <!-- <button class="btn btn-secondary" id="del-user">Remove</button>-->
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
                <th>Meta Key</th>
                <th>Description</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php $index = 0; foreach ($metaKeys as $metaKey): $index++?>

                <tr>
                    <td><?= $this->Number->format($metaKey->id) ?></td>
                    <td><?= h($metaKey->meta_key) ?></td>
                    <td><?= h($metaKey->description) ?></td>
                    <td><?= h($metaKey->is_active) ?></td>
                    <td class="actions">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $metaKey->id], ['class' => 'dropdown-item btn btn-secondary']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $metaKey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $metaKey->id), 'class' => 'dropdown-item btn btn-secondary']) ?>
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

