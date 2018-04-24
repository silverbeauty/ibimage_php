<style>
  body {
    padding-top: 60px;
  }
</style>
<section class="row section-logo">
  <div class="col-md-6 brand">
      <div class="logo">
        <img src="<?= $this->Url->image('ibimages.logo.png')?>" style="vertical-align: middle">
        <h4>Welcome to IBImages</h4>
      </div>
      <h5>Recording memories for everyone's future</h5>
  </div>
  <div class="col-md-6 login-form">
      <?= $this->Form->create(null, ['class' => 'form-horizontal']) ?>
      <div class="form-group row">
        <?= $this->Form->label('username', 'Login:', ['class' => 'col-sm-4 control-label'])?>
        <div class="col-sm-8">
          <?= $this->Form->text('username', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
          <?= $this->Form->label('password', 'Password:', ['class' => 'col-sm-4 control-label'])?>
        <div class="col-sm-8">
            <?= $this->Form->password('password', ['class' => 'form-control', 'autocomplete' => 'off']) ?>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-4 col-sm-5 col-12">
          <div class="checkbox">
            <label class="remember">
              <input type="checkbox" class="checkbox-template"> Remember me
            </label>
          </div>
        </div>
        <div class="pull-right col-sm-3 text-right col-12">
            <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary btn-lg btn-login col-12']) ?>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-4 text-right col-12">
            <?= $this->Form->button('NFC', ['class' => 'btn btn-primary btn-lg btn-login col-12'])?>
        </div>
        <div class="col-sm-8 text-left col-12">
          <?= $this->Form->button('Scan Your NFC Card Here', ['class' => 'btn btn-primary btn-lg col-12 btn-white'])?>
        </div>
      </div>
      <?= $this->Form->end() ?>
  </div>
</section>
<section class="section-social row container">
  <div class="col-12 col-sm-6">
    <div class="fb-page" data-href="https://www.facebook.com/ibimagescom" style="margin: auto; padding-left:0px"
         data-tabs="timeline"
         data-small-header="false"
         data-numposts="5"
         data-width="500"
         data-height="500"

         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
      <blockquote cite="https://www.facebook.com/ibimagescom" class="fb-xfbml-parse-ignore">
        <a href="https://www.facebook.com/ibimagescom">Ian's IBImages</a>
      </blockquote>
    </div>
  </div>
  <div class="col-12 col-sm-6" id="google-map" style="text-align: center;">
    <iframe src="https://www.google.com/maps/d/embed?mid=1h-qW6RCJVG5Fnjxb8UQC9H5lINkRvPoa" width="100%" height="500" style="max-width: 500px; margin: auto;"></iframe>
  </div>
  <div class="col-12" style="margin-top: 20px">
    <a class="e-widget" href="https://gleam.io/2cUK1/ib-images-giveaway" rel="nofollow">IB Images Giveaway!</a>
    <script type="text/javascript" src="https://js.gleam.io/e.js" async="true"></script>
  </div>
  <!--Set the map-->
</section>

<div class="row container">
  <div class="col-lg-12">
    <h5 class="text-left">Disclaimer</h5>
    <p class="text-left"><small>Any data held on IBImages' host system is the confidential business sensitive and PRIVATE PROPERTY of IBImages
        and is not intended nor available for public access, view or use. Access to the data is only available and permitted to
        authorised users for legitimate authorised business purposes and is otherwise STRICTLY PROHIBITED. Any unauthorised entry
        or attempted entry contravenes the Computer Misuse Act 1990 and may incur criminal as well as civil penalties and liability
        for damages as well as mandatory judicial enforcement measures which may be invoked by IBImages at IBImages' discretion.</small></p>
  </div>
</div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
