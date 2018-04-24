<?php
$cakeDescription = 'IBImages-';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>
        <?= $cakeDescription ?>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('custom.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('jquery.js') ?>

    <?= $this->Html->script('popper.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>

</head>
<body>
<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <div class="container">
    <a href="/" class="navbar-brand">IBImages</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= $this->Url->build(['controller' => 'Products'])?>">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $this->Url->build('contact-us', true)?>">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $this->Url->build('help', true)?>">Help</a>
        </li>
      </ul>
      <?php if ($this->request->session()->read('Auth.User.id')):?>
      <ul class="nav navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Photos</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/events', true)?>">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/logout', true)?>">Logout</a></li>
      </ul>
      <?php endif;?>
    </div>
  </div>
</div>



<?= $this->Flash->render() ?>
  <div class="container clearfix">
      <?= $this->fetch('content') ?>
  </div>
  <footer>
    Copyright © 2018 IBImages.
  </footer>

  <?= $this->Html->script('/libs/jquery.lazy-master/jquery.lazy.js') ?>
  <?= $this->Html->script('/libs/jquery.lazy-master/jquery.lazy.plugins.js') ?>
  <?= $this->Html->script('/libs/masonry/masonry.pkgd.js') ?>
  <?= $this->Html->script('/libs/jquery.magnific-popup/jquery.magnific-popup.js') ?>
  <?= $this->Html->css('/libs/jquery.magnific-popup/magnific-popup.css') ?>
<?= $this->Html->script('scripts.js') ?>
  <?= $this->fetch('bottomScripts') ?>
</body>

</html>
