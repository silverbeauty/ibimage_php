<div class="page-header">
    <div class="row">
        <div class="col-6">
            <h3>Edit User</h3>
        </div>
    </div>
</div>


<?= $this->Form->create($user) ?>
<div class="form-group row">
    <?= $this->Form->label('full_name', 'User name', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('full_name', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>
<div class="form-group row">
    <?= $this->Form->label('email', 'User email', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->email('email', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>
<div class="form-group row">
    <?= $this->Form->label('username', 'User Id', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('username', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>
<?php if($this->request->getParam('action') == 'add') : ?>
<div class="form-group row">
    <?= $this->Form->label('password', 'User Password', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('password', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>
<?php endif;?>
<div class="form-group row">
    <?= $this->Form->label('role', 'User Role', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->select('role', \Cake\Core\Configure::read('Roles'), ['class'=>"form-control dropdown-select"]);?>
    </div>
</div>

<div class="form-group row">
    <?= $this->Form->label('ftp_root_path', 'Ftp path', ['class' => 'col-sm-2 control-label'])?>
  <div class="col-sm-10">
      <?= $this->Form->select('ftp_root_path', $ftp_dirs, ['class'=>"form-control"]);?>

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
        <?= $this->Html->link('Cancel', '/users', ['class' => 'btn btn-secondary']) ?>
    </div>
</div>
<?= $this->Form->end() ?>