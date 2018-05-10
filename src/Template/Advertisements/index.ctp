<div class="page-header">
    <div class="row">
        <div class="col-6">
            <h3>Advertise Banners</h3>
        </div>
        <div class="col-6 text-right">
            <?= $this->Html->link(__('New Banner'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
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
                <th></th>
                <th>Name</th>
                <th>Ads Url</th>
                <th>Hover Text</th>
                <th>Type</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php $index = 0; foreach ($advertisements as $advertisement):  $index++?>
            <tr>
                <td><?= $index ?></td>
                <td><img src="<?= $this->Url->assetUrl($advertisement->image_url)?>" width="64" height="auto"></td>
                <td><?= h($advertisement->name) ?></td>
                <td><?= h($advertisement->ads_url) ?></td>
                <td><?= h($advertisement->text1) ?></td>
                <td><?= h($advertisement->ads_type) ?></td>
                <td><?= h($advertisement->is_active) ?></td>
                <td class="actions">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $advertisement->id], ['class' => 'dropdown-item btn btn-secondary']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $advertisement->id], ['confirm' => __('Are you sure you want to delete?'), 'class' => 'dropdown-item btn btn-secondary']) ?>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>

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