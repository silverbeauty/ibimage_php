
<style>

  .grid-item { width:20%;
    margin:0px auto 0px auto;
    padding:10px;
  }
  .grid-item img{ width: 100%;  max-width: 100%; border: 3px solid white; display: none;}

  @media (max-width: 1200px) {
    .grid-item { width:25%;}
  }

  @media (max-width: 768px) {
    .grid-item { width:33.333333%;}
  }

  @media (max-width: 576px) {
    .grid-item { width:50%;}
  }




</style>

<?php $this->Html->script(['/libs/jquery.smart-wizard/js/jquery.smart-wizard.min.js'], ['block' => 'bottomScripts']) ?>
<?php $this->Html->script(['jquery.treeview-logger.js'], ['block' => 'bottomScripts']) ?>
<?php $this->Html->script(['jquery.treeview.js'], ['block' => 'bottomScripts']) ?>
<?php $this->Html->css(['/libs/jquery.smart-wizard/css/smart_wizard.css'], ['block' => 'css']) ?>
<?php $this->Html->css(['/libs/jquery.smart-wizard/css/smart_wizard_theme_arrows.css'], ['block' => 'css']) ?>
<?= $this->Form->create("events", ['class' => 'form-horizontal']) ?>

<style>
  #treeview-checkbox-demo span {
    margin-left: 12px;
  }

  .treeview {
    padding-left: 10px;
    padding-right: 20px;
  }
</style>
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
      <div class="form-group row">
          <?= $this->Form->label('parent', 'Parent Event', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('parent', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('name', 'Name', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('name', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('place', 'Place', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('place', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('started', 'Started', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('started', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('ended', 'Ended', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('ended', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('description', 'Description', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->textarea('description', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>

      <div class="form-group row">
          <?= $this->Form->label('team1', 'Team A', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('team1', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('team2', 'Team B', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('team2', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('division', 'Division', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('division', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('association', 'Association', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('association', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('gender', 'Gender', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('gender', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('field_num', 'Field Name', ['class' => 'col-sm-2 control-label'])?>
        <div class="col-sm-10">
            <?= $this->Form->text('field_num', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>

    </div>
    <div id="step-2" class="">
      <div class="form-group row">
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
      <div class="form-group row">
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

      <div class="form-group row">
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
      <div class="form-group row">
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

      <div class="bs-component">
        <ul class="nav nav-tabs nav-pills nav-justified">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Ftp Photos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#profile">Event Photos</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade show active" id="home">
            <div class="clearfix row">
              <div class="dropdown col-8">
                <button id="dLabel" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose Ftp Folders
                </button>
                <div class="dropdown-menu" aria-labelledby="dLabel">
                  <div id="treeview-checkbox-demo">

                    <ul>
                      <li data-value="html"><span>2018 Junior State Championships</span>
                        <ul>
                          <li data-value="table"><span>	Friday</span></li>
                          <li data-value="links"><span>Saturday</span></li>
                        </ul>
                      </li>
                      <li><span>2018 Senior State Championships</span>
                        <ul>
                          <li data-value="PHP if..else"><span>Friday</span></li>
                          <li data-value="PHP Loops"><span>	Sunday</span>
                            <ul>
                              <li data-value="For loop"><span>GIRLS 17</span></li>
                              <li data-value="While loop"><span>BOYS 16</span></li>
                              <li data-value="Do WHile loop"><span>BOYS 19</span></li>
                            </ul>
                          </li>
                          <li><span>OZTAG Events</span></li>
                        </ul>
                      </li>
                      <li><span>2018 Sydney Oztag 10s Cup</span>
                        <ul>
                          <li data-value="jQuery append"><span>	NSW Junior State Cup 2012</span></li>
                          <li data-value="jQuery prepend"><span>Rockdale Beach Oztag Classic 2012</span></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <button class="btn btn-secondary float-right">Copy</button>
                <button class="btn btn-secondary float-right">Delete</button>
              </div>

            </div>
              <?php
              $img = [$this->Url->image('sample0.jpg'), $this->Url->image('sample1.jpg')
                  , $this->Url->image('sample2.jpg'), $this->Url->image('sample3.jpg')
                  , $this->Url->image('sample4.jpg'), $this->Url->image('sample5.jpg')];
              ?>
            <div class="public-user-block block">
              <div class="grid">
                  <?php
                  for($i = 0; $i < 10; $i++): $val = 'sample' . rand(0, 15) % 15 . '.jpg';$val = rand(0, 6) % 6;
                      $url = $this->Url->build(["controller" => "Events","action" => "popup_ftp_photo", "?" => ["photo" => $this->Url->image($img[$val]. '?t=' . microtime())]]);
                      ?>
                    <div class="grid-item" style="min-width: 200px;min-height: 200px;" href="<?= $url?>">
                      <img href="#" data-src="<?= $this->Url->image($img[$val]. '?t=' . microtime())?>">
                    </div>
                  <?php endfor;?>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile">
            <div class="clearfix">
              <button class="btn btn-secondary float-right">Copy</button>
              <button class="btn btn-secondary float-right">Delete</button>
            </div>
              <?php
              $img = [$this->Url->image('sample0.jpg'), $this->Url->image('sample1.jpg')
                  , $this->Url->image('sample2.jpg'), $this->Url->image('sample3.jpg')
                  , $this->Url->image('sample4.jpg'), $this->Url->image('sample5.jpg')];
              ?>
            <div class="public-user-block block">
              <div class="grid">
                  <?php
                  for($i = 0; $i < 10; $i++): $val = 'sample' . rand(0, 15) % 15 . '.jpg';$val = rand(0, 6) % 6;
                      $url = $this->Url->build(["controller" => "Events","action" => "popup_event_photo", "?" => ["photo" => $this->Url->image($img[$val]. '?t=' . microtime())]]);
                      ?>
                    <div class="grid-item" style="min-width: 200px;min-height: 200px;" href="<?= $url?>">
                      <img href="#" data-src="<?= $this->Url->image($img[$val]. '?t=' . microtime())?>">
                    </div>
                  <?php endfor;?>
              </div>
            </div>
          </div>

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
                      <?= $this->Form->text('click_url', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Advertising Url']) ?>
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

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('.grid').masonry({
                itemSelector: '.grid-item',
                percentPosition: true
            });
        });

        /*$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
            if(stepNumber ==2 ) {
                $('#step-3').show();
                $('.grid').masonry({
                    itemSelector: '.grid-item',
                    percentPosition: true
                });
            }
        });*/
        $('#treeview-checkbox-demo').treeview({
            debug : true,
            data : ['html', 'links', 'Do WHile loop']
        });

        $('#treeview-checkbox-demo').click(function(e) {
           e.stopPropagation();
           return true;
        });

        var index = 0;
        /*$('.grid').masonry({
            itemSelector: '.grid-item',
            percentPosition: true
        });
*/
        $('.grid-item img').lazy({
            effect: "fadeIn",
            effectTime: 2000,
            threshold: 30,
            afterLoad: function(element) {
                $(element).next().hide();
                $(element).parent().addClass('loaded');
                index++;
                if(index % 10 == 0)
                {
                    $('.grid-item.loaded').css('min-width', '');
                    $('.grid-item.loaded').css('min-height', '');
                    $('.grid').masonry({
                        itemSelector: '.grid-item',
                        percentPosition: true
                    });
                }

            },
            onFinishedAll: function() {
                var $container = $('.grid');
                $('.grid-item').css('min-width', '');
                $('.grid-item').css('min-height', '');
                $container.masonry({
                    itemSelector: '.grid-item',
                    percentPosition: true
                });

                $("[data-loader='rectangle']").hide();
            }
        });



        $('.grid').magnificPopup({
            delegate: 'div.grid-item',
            type: 'ajax',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            gallery: {
                enabled: true
            }
        });

    });
</script>