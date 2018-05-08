<div class="page-header">
    <div class="row">
        <div class="col-12">
            <h3>Assign Photo Price</h3>
        </div>
    </div>
</div>

<div class="priceGroupValues form large-9 medium-8 columns content">
    <?= $this->Form->create($priceGroupValue) ?>

    <div class="form-group row">
        <?= $this->Form->label('photo_size_id', 'Photo Size', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->select('photo_size_id', $photoSizes, ['class'=>"form-control dropdown-select"]);?>
        </div>
    </div>
    <div class="form-group row">
        <?= $this->Form->label('price', 'Price', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->number('price', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
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
            <?= $this->Html->link('Cancel', ['controller' => 'PriceGroups', 'action' => 'edit', $priceGroupValue->price_group_id], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
