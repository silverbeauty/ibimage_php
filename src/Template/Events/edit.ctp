<? $this->Html->script(['/libs/jquery.smart-wizard/js/jquery.smart-wizard.min.js'], ['block' => 'bottomScripts']) ?>
<? $this->Html->css(['/libs/jquery.smart-wizard/css/smart_wizard.css'], ['block' => 'css']) ?>
<? $this->Html->css(['/libs/jquery.smart-wizard/css/smart_wizard_theme_arrows.css'], ['block' => 'css']) ?>
<?= $this->Form->create("events", ['class' => 'form-horizontal']) ?>
<div id="smartwizard">
  <ul>
    <li><a href="#step-1">Step 1<br /><small>Edit an Evemt</small></a></li>
    <li><a href="#step-2">Step 2<br /><small>Price and Size</small></a></li>
    <li><a href="#step-3">Step 3<br /><small>Upload Photos</small></a></li>
    <li><a href="#step-4">Step 4<br /><small>Advertising</small></a></li>
    <li><a href="#step-5">Step 5<br /><small>Waiting approve by Admin</small></a></li>
  </ul>

  <div>
    <div id="step-1" class="">
      <div class="form-group">
          <?= $this->Form->label('parent', 'Parent Event', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('parent', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('name', 'Name', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('name', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('place', 'Place', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('place', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('started', 'Started', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('started', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('ended', 'Ended', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('ended', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('description', 'Description', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->textarea('description', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>

      <div class="form-group">
          <?= $this->Form->label('team1', 'Team A', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('team1', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('team2', 'Team B', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('team2', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('division', 'Division', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('division', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('association', 'Association', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('association', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('gender', 'Gender', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('gender', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('field_num', 'Field Name', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('field_num', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>

    </div>
    <div id="step-2" class="">
      <div class="form-group">
          <?= $this->Form->label('a5', 'A5', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10 input-group">
            <?= $this->Form->text('a4', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default<span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Default</a></li>
              <li><a href="#">YES</a></li>
              <li><a href="#">NO</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('a4', 'A4', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10 input-group">
            <?= $this->Form->text('a4', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default<span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Default</a></li>
              <li><a href="#">YES</a></li>
              <li><a href="#">NO</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div>
      </div>

      <div class="form-group">
          <?= $this->Form->label('a2', 'A2', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10 input-group">
            <?= $this->Form->text('a4', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default<span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Default</a></li>
              <li><a href="#">YES</a></li>
              <li><a href="#">NO</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div>
      </div>
      <div class="form-group">
          <?= $this->Form->label('digital', 'Digital File', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10 input-group">
            <?= $this->Form->text('digital', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default<span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Default</a></li>
              <li><a href="#">YES</a></li>
              <li><a href="#">NO</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div>
      </div>

    </div>
    <div id="step-3" class="">
      <h3 class="border-bottom border-gray pb-2">Step 4 Content</h3>
      <div class="card">
        <div class="card-header">My Details</div>
        <div class="card-block p-0">
          <table class="table">
            <tbody>
            <tr> <th>Name:</th> <td>Tim Smith</td> </tr>
            <tr> <th>Email:</th> <td>example@example.com</td> </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div id="step-4" class="">
      <div class="row">
        <div class="col-lg-6">
          <div class="checklist-block block">
            <div class="title"><strong>Advertising Banners</strong></div>
              <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="banner-el">
                  <img src="" height="100" width="100">
                  <div class="form-group">
                      <?= $this->Form->text('banner1_img_url', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Banner Image Url']) ?>
                    <br />
                      <?= $this->Form->text('banner1_url', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Advertising Url']) ?>
                  </div>
                </div>
              <?php endfor;?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="messages-block block">
            <div class="title"><strong>Click Through Advertising</strong></div>
              <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="banner-el banner-click">
                  <img src="" height="100" width="100">
                  <div class="form-group">
                      <?= $this->Form->text('click_img_url', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Banner Image Url']) ?>
                    <br />
                      <?= $this->Form->text('click_url', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Advertising Url']) ?>
                    <br />
                      <?= $this->Form->text('hover_text', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Hover Text']) ?>
                  </div>
                </div>
              <?php endfor;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(function() {
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'default',
            transitionEffect:'fade',
            showStepURLhash: true,
            toolbarSettings: {toolbarPosition: 'bottom',
                toolbarButtonPosition: 'end',
                /*toolbarExtraButtons: [btnFinish, btnCancel]*/
            }
        });
    });
</script>