<div class="page-header">
    <div class="row">
        <div class="col-12">
            <h3>Edit Photographer</h3>
        </div>
    </div>
</div>


<?= $this->Form->create($user) ?>
<div class="form-group row">
    <?= $this->Form->label('code', 'Code name', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('code', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>
<div class="form-group row">
    <?= $this->Form->label('name', 'Photographer name', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('name', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <input type="hidden" name="is_active" value="0">
        <?= $this->Form->checkbox('is_active', ['value' => '1', 'hiddenField' => '0']);?> Active
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <?= $this->Form->button('Save', ['type' => 'submit', 'class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link('Cancel', '/users', ['class' => 'btn btn-secondary']) ?>
    </div>
</div>
<?= $this->Form->end() ?>