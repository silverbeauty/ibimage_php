<div class="page-header">
    <div class="row">
        <div class="col-12">
            <h3>Edit Price Group</h3>
        </div>
    </div>
</div>


<?= $this->Form->create($priceGroup) ?>
<div class="form-group row">
    <?= $this->Form->label('name', 'Group Name', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('group_name', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>
<div class="form-group row">
    <?= $this->Form->label('description', 'Description', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->textarea('description', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <input type="hidden" name="is_active" value="0">
        <?= $this->Form->checkbox('is_active', ['label' => null,  'id'=>'is_active', 'value' => '1', 'hiddenField' => 0]);?> Active
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <?= $this->Form->button('Save', ['type' => 'submit', 'class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link('Cancel', ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>
<?= $this->Form->end() ?>
<div class="row">
    <div class="col-sm-2"><?= $this->Html->link('Assign Price', ['controller' => 'PriceGroupValues', 'action' => 'add', $priceGroup->id], ['class' => 'btn btn-secondary']) ?></div>
    <div class="col-sm-10">

        <div class="table-responsive">
            <table class="table" id="user-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Photo Size</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php $index = 0; foreach ($priceGroup->price_group_values as $priceGroupValues): $index++?>
                    <tr>
                        <td><?= $index?></td>
                        <td><?= h($priceGroupValues->photo_size->name) ?></td>
                        <td><?= h($priceGroupValues->photo_size->description) ?></td>
                        <td><?= $this->Number->format($priceGroupValues->price) ?></td>
                        <td><?= h($priceGroupValues->is_active) ?></td>

                        <td class="actions">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'PriceGroupValues', 'action' => 'edit'
                                            , $priceGroupValues->price_group_id, $priceGroupValues->photo_size_id]
                                        , ['class' => 'dropdown-item btn btn-secondary']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PriceGroupValues', 'action' => 'delete'
                                            , $priceGroupValues->price_group_id, $priceGroupValues->photo_size_id]
                                        , ['confirm' => __('Are you sure you want to delete?'), 'class' => 'dropdown-item btn btn-secondary']) ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>
</div>


<!--
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
</script>-->

<!--
<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Form in simple modal </button>

<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Signin Modal</strong>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p>Select the photo size</p>
                <form>
                    <div class="form-group">
                        <label>Photo Size</label>

                        <input type="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Signin" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->