<div class="page-header">
    <div class="row">
        <div class="col-12">
            <h3>Edit Advertise Banner</h3>
        </div>
    </div>
</div>


<?= $this->Form->create($advertisement, ['enctype' => 'multipart/form-data']) ?>
<div class="form-group row">
    <?= $this->Form->label('name', 'Name', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('name', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>
<div class="form-group row">
    <?= $this->Form->label('description', 'Description', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->textarea('description', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>

<div class="form-group row">
    <?= $this->Form->label('ads_url', 'Click Url', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('ads_url', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>

<div class="form-group row">
    <?= $this->Form->label('text1', 'Hover Text', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('text1', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>

<div class="form-group row">
    <?= $this->Form->label('ads_type', 'Ads Type', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->select('ads_type', ["banner" => 'Banner', "click" => 'Click Ads'], ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>

<div class="form-group row">

    <div class="col-sm-10 offset-sm-2">
        <div class="image-preview attached" style="background-image: url('<?=$this->Url->assetUrl($advertisement->image_url)?>')">
            <label for="image-upload" class="image-label">Banner Image</label>
            <?= $this->Form->file('image_upload', ['id' => 'image-upload', 'autocomplete' => 'off']) ?>
        </div>
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
        <?= $this->Html->link('Cancel', ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>
<?= $this->Form->end() ?>

<script type="text/javascript">
    $(document).ready(function() {
        $.uploadPreview({
            input_field: "#image-upload",   // Default: .image-upload
            preview_box: ".image-preview",  // Default: .image-preview
            label_field: ".image-label",    // Default: .image-label
            label_default: "Banner Image",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false                 // Default: false
        });
    });
</script>