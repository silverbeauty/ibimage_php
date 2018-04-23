
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
$img = [/*"http://jquery.eisbehr.de/lazy/images/1.jpg", "http://jquery.eisbehr.de/lazy/images/2.jpg"
    , "http://jquery.eisbehr.de/lazy/images/3.jpg", "http://jquery.eisbehr.de/lazy/images/4.jpg"
    , "http://jquery.eisbehr.de/lazy/images/5.jpg", "http://jquery.eisbehr.de/lazy/images/6.jpg"
    , "http://jquery.eisbehr.de/lazy/images/7.jpg", "http://jquery.eisbehr.de/lazy/images/8.jpg",*/
    $this->Url->image('sample0.jpg'), $this->Url->image('sample1.jpg')
    , $this->Url->image('sample2.jpg'), $this->Url->image('sample3.jpg')
    , $this->Url->image('sample4.jpg'), $this->Url->image('sample5.jpg')];
?>

<div data-loader="rectangle"></div>
<div class="loader"><div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div></div>
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


<script>
    $( function() {

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