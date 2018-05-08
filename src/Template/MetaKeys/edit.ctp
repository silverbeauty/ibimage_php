<div class="page-header">
    <div class="row">
        <div class="col-12">
            <h3>Edit Meta Key</h3>
        </div>
    </div>
</div>


<?= $this->Form->create($metaKey) ?>
<div class="form-group row">
    <?= $this->Form->label('meta_key', 'Meta Key', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('meta_key', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
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
        <?= $this->Form->checkbox('is_active', ['value' => '1', 'hiddenField' => '0']);?> Active
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <?= $this->Form->button('Save', ['type' => 'submit', 'class' => 'btn btn-secondary']) ?>
        <?= $this->Html->link('Cancel', ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>
<?= $this->Form->end() ?>
