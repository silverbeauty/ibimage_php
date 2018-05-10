<div class="page-header">
  <div class="row">
    <div class="col-6">
      <h3>System Options</h3>
    </div>
  </div>
</div>
<?= $this->Form->create() ?>
    <h5>Social Integration</h5>
    <div class="form-group row">
        <?= $this->Form->label('google_place', 'Google Place', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('google_place', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['google_place']]) ?>
        </div>
    </div>
    <div class="form-group row">
        <?= $this->Form->label('google_map_api', 'Google Map Api', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('google_map_api', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['google_map_api']]) ?>
        </div>
    </div>
    <div class="form-group row">
    <?= $this->Form->label('facebook_api', 'Facebook Api', ['class' => 'col-sm-2 control-label'])?>
    <div class="col-sm-10">
        <?= $this->Form->text('facebook_api', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['facebook_api']]) ?>
    </div>
    </div>
    <div class="form-group row">
        <?= $this->Form->label('twitter_api', 'Twitter Api', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('twitter_api', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['twitter_api']]) ?>
        </div>
    </div>

    <h5>Photo File System Options</h5>

    <div class="form-group row">
        <?= $this->Form->label('ftp_root_path', 'Ftp Root Path', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('ftp_root_path', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['ftp_root_path']]) ?>
        </div>
    </div>


    <div class="form-group row">
        <?= $this->Form->label('photo_root_path', 'Photo Root Path', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
        <?= $this->Form->text('photo_root_path', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['photo_root_path']]) ?>
        </div>
    </div>

    <!--<div class="form-group row">
        <?/*= $this->Form->label('ads_upload_path', 'Ads Upload Path', ['class' => 'col-sm-2 control-label'])*/?>
        <div class="col-sm-10">
            <?/*= $this->Form->text('ads_upload_path', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['ads_upload_path']]) */?>
        </div>
    </div>-->
<!--
    <h5>Default Prices</h5>
    <div class="form-group row">
        <?= $this->Form->label('a5_price', 'A5', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->number('a5_price', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['a5_price']]) ?>
        </div>
    </div>
    <div class="form-group row">
        <?= $this->Form->label('a4_price', 'A4', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->number('a4_price', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['a4_price']]) ?>
        </div>
    </div>
    <div class="form-group row">
        <?= $this->Form->label('a2_price', 'A2', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
        <?= $this->Form->number('a2_price', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['a2_price']]) ?>
        </div>
    </div>

    <div class="form-group row">
        <?= $this->Form->label('digital_price', 'Digital', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
        <?= $this->Form->number('digital_price', ['class' => 'form-control', 'autocomplete' => 'off', 'default' => @$options['digital_price']]) ?>
        </div>
    </div>
    -->
    <div class="form-group row">
        <div class="col-sm-10 offset-2">
            <?= $this->Form->submit('Save', ['class' => 'btn btn-secondary', 'autocomplete' => 'off']) ?>
        </div>
    </div>


<?= $this->Form->end() ?>
