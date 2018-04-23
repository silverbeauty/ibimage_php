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
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">IBImages</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?= $this->Url->build(['controller' => 'Products'])?>">Products</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        <?php if ($this->request->session()->read('Auth.User.id')):?>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
            <ul class="dropdown-menu">


              <li><a href="#">Photos</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li><a href="#">Users</a></li>
          <li><a href="#">Photos</a></li>
          <li><a href="<?= $this->Url->build('/events', true)?>">Events</a></li>
          <li><a href="<?= $this->Url->build('/logout', true)?>">Logout</a></li>
        </ul>
        <?php endif;?>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <?= $this->Flash->render() ?>
  <div class="container clearfix">
      <?= $this->fetch('content') ?>
  </div>
  <footer>
  </footer>

  <?= $this->Html->script('/libs/jquery.lazy-master/jquery.lazy.js') ?>
  <?= $this->Html->script('/libs/jquery.lazy-master/jquery.lazy.plugins.js') ?>
  <?= $this->Html->script('/libs/masonry/masonry.pkgd.js') ?>
  <?= $this->Html->script('/libs/jquery.magnific-popup/jquery.magnific-popup.js') ?>
  <?= $this->Html->css('/libs/jquery.magnific-popup/magnific-popup.css') ?>

  <?= $this->fetch('bottomScripts') ?>
</body>
</html>
