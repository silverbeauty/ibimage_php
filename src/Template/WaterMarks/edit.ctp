<div class="page-header">
    <div class="row">
        <div class="col-12">
            <h3>Edit Watermark</h3>
        </div>
    </div>
</div>


<?= $this->Form->create($waterMark, ['enctype' => 'multipart/form-data']) ?>
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
    <?= $this->Form->label('hover_text', 'Hover Text', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('hover_text', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <div class="image-preview attached" id="default_image_wrapper" style="background-image: url('<?=$this->Url->assetUrl($waterMark->image_url)?>')">
            <label for="image-upload" class="image-label">Default Image</label>
            <?= $this->Form->file('default_image', ['id' => 'default_image', 'autocomplete' => 'off']) ?>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <div class="image-preview attached" id="facebook_image_wrapper" style="background-image: url('<?=$this->Url->assetUrl($waterMark->fb_image_url)?>')">
            <label for="image-upload" class="image-label">Facebook</label>
            <?= $this->Form->file('facebook_image', ['id' => 'facebook_image', 'autocomplete' => 'off']) ?>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <div class="image-preview attached" id="twitter_image_wrapper" style="background-image: url('<?=$this->Url->assetUrl($waterMark->tw_image_url)?>')">
            <label for="image-upload" class="image-label">Twitter</label>
            <?= $this->Form->file('twitter_image', ['id' => 'twitter_image', 'autocomplete' => 'off']) ?>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <div class="image-preview attached" id="instagram_image_wrapper" style="background-image: url('<?=$this->Url->assetUrl($waterMark->it_image_url)?>')">
            <label for="image-upload" class="image-label">Instagram</label>
            <?= $this->Form->file('instagram_image', ['id' => 'instagram_image', 'autocomplete' => 'off']) ?>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <div class="image-preview attached" id="snapshot_image_wrapper" style="background-image: url('<?=$this->Url->assetUrl($waterMark->sn_image_url)?>')">
            <label for="image-upload" class="image-label">Snapshot</label>
            <?= $this->Form->file('snapshot_image', ['id' => 'snapshot_image', 'autocomplete' => 'off']) ?>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <div class="image-preview attached" id="pinterest_image_wrapper" style="background-image: url('<?=$this->Url->assetUrl($waterMark->pt_image_url)?>')">
            <label for="image-upload" class="image-label">Pinterest</label>
            <?= $this->Form->file('pinterest_image', ['id' => 'pinterest_image', 'autocomplete' => 'off']) ?>
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
            input_field: "#default_image",
            preview_box: "#default_image_wrapper",
            label_field: "#default_image_image-label",
            label_default: "Banner Image",
            label_selected: "Change File",
            no_label: false
        });
        $.uploadPreview({
            input_field: "#facebook_image",
            preview_box: "#facebook_image_wrapper",
            label_field: "#facebook_image_image-label",
            label_default: "Facebook",
            label_selected: "Change File",
            no_label: false
        });
        $.uploadPreview({
            input_field: "#twitter_image",
            preview_box: "#twitter_image_wrapper",
            label_field: "#twitter_image_image-label",
            label_default: "Twitter",
            label_selected: "Change File",
            no_label: false
        });
        $.uploadPreview({
            input_field: "#instagram_image",
            preview_box: "#instagram_image_wrapper",
            label_field: "#instagram_image_image-label",
            label_default: "Instagram",
            label_selected: "Change File",
            no_label: false
        });
        $.uploadPreview({
            input_field: "#snapshot_image",
            preview_box: "#snapshot_image_wrapper",
            label_field: "#snapshot_image_image-label",
            label_default: "Snapshot",
            label_selected: "Change File",
            no_label: false
        });
        $.uploadPreview({
            input_field: "#pinterest_image",
            preview_box: "#pinterest_image_wrapper",
            label_field: "#pinterest_image_image-label",
            label_default: "Pinterest",
            label_selected: "Change File",
            no_label: false
        });
    });
</script>