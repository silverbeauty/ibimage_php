
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
<?php
$img = [
    $this->Url->image('sample0.jpg'), $this->Url->image('sample1.jpg')
    , $this->Url->image('sample2.jpg'), $this->Url->image('sample3.jpg')
    , $this->Url->image('sample4.jpg'), $this->Url->image('sample5.jpg')];
?>

<div data-loader="rectangle"></div>
<div class="loader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
<div id="top-banner" class="row">
    <div class="col-4">
        <a target="_blank" href="http://ibimages.com"><img src="<?=$this->Url->image('banner1.jpg')?>" style="width: 100%"></a>
    </div>
    <div class="col-4">
        <a target="_blank" href="http://pinterest.com"><img src="<?=$this->Url->image('banner2.jpg')?>" style="width: 100%"></a>
    </div>
    <div class="col-4">
        <a target="_blank" href="http://facebook.com"><img src="<?=$this->Url->image('banner3.jpg')?>" style="width: 100%"></a>
    </div>
</div>
<div class="grid">
    <?php
    for($i = 0; $i < 100; $i++): $val = 'sample' . rand(0, 15) % 15 . '.jpg';$val = rand(0, 6) % 6;
      $url = $this->Url->build(["controller" => "Products","action" => "popup", "?" => ["photo" => $this->Url->image($img[$val]. '?t=' . microtime())]]);
    ?>
    <div class="grid-item" style="min-width: 200px;min-height: 200px;" href="<?= $url?>">
        <img href="#" data-src="<?= $this->Url->image($img[$val]. '?t=' . microtime())?>">
    </div>
    <?php endfor;?>
</div>
<div class="owl-carousel owl-theme">
    <div class="item"><a target="_blank" href="http://ibimages.com"><img src="<?=$this->Url->image('sample0.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://facebook.com"><img src="<?=$this->Url->image('sample5.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://twitter.com"><img src="<?=$this->Url->image('sample4.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://pinterest.com"><img src="<?=$this->Url->image('sample0.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://snapshot.com"><img src="<?=$this->Url->image('sample4.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://ibimages.com"><img src="<?=$this->Url->image('sample5.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://pinterest.com"><img src="<?=$this->Url->image('sample4.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://twitter.com"><img src="<?=$this->Url->image('sample0.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://snapshot.com"><img src="<?=$this->Url->image('sample5.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://ibimages.com"><img src="<?=$this->Url->image('sample4.jpg')?>"></a></div>
    <div class="item"><a target="_blank" href="http://ibimages.com"><img src="<?=$this->Url->image('sample0.jpg')?>"></a></div>
</div>
<div id="bottom-banner" class="row">
    <div class="col-4">
        <a target="_blank" href="http://ibimages.com"><img src="<?=$this->Url->image('banner4.jpg')?>" style="width: 100%"></a>
    </div>
    <div class="col-4">
        <a target="_blank" href="http://facebook.com"><img src="<?=$this->Url->image('banner5.jpg')?>" style="width: 100%"></a>
    </div>
    <div class="col-4">
        <a target="_blank" href="http://twitter.com"><img src="<?=$this->Url->image('banner2.jpg')?>" style="width: 100%"></a>
    </div>
</div>
<script>
    $( function() {

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:5
                },
                1000:{
                    items:6
                }
            }
        })

        var index = 0;
        $('.grid').masonry({
            itemSelector: '.grid-item',
            percentPosition: true
        });

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

        /*$('.grid-item')..magnificPopup({
            type: 'ajax'
        });*/

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