<body>
    <div>
        <div id="banner-wrapper">
            <div id="header-wrapper">
                <div id="header">
                    <div class="top-header row">
                        <div class="top-header-left col-lg-4  col-xl-4 col-md-4 col-sm-5 col-xs-12">
                            <img alt="" src="images/logo.png">
                            <span class="company-name">Zaimrubli</span>
                        </div>
                        <div class="top-header-right col-lg-8  col-xl-8 col-md-8 col-sm-7 col-xs-12">
                            <span class="top-offers">Топ-12 предложений...</span>
                        </div>
                    </div>

                    <div class="advertising-block no-padding-top row">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12 text-block hidden-768"></div>
                        
                        <div class=" col-lg-6 col-xl-6 col-md-6 col-sm-6 col-xs-12">
                        </div>

                    </div>
                </div>
                <?php 
    require 'header.php';
    $this->load->model('offers/offers_model', 'offers');
    $data = $this->offers->all(12);
?>
            </div>
            <div id="body">
                <h2>ZAIMRUBLI</h2>
                <h3>БЫСТРЫЕ ОНЛАЙН-ЗАЙМЫ НА КАРТУ В РОССИИ</h3>
                <div class="offer-block-1 container">
                    <div class="offer-wrapper row">

                        <?php
$r = 0;
    foreach($data as $item){
      $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
      $item['link'] = str_replace("#site", $domen, $item['link']);
      $item['link'] = str_replace("aff_sub1=bzaim5.ru", "aff_sub1=zaimrubli.ru", $item['link']);

      $r++;
      if($r < 5)
      {
          echo '<div class="offer col-lg-3 col-xl-4 col-md-4 col-sm-6 col-xs-12">
          <div class="inner-offer">
            <img src="/templates/common/img/offers/'.$item['img'].'.png" class="offer-logo" alt="'.$item['img'].'.png"> 
            <div class="grey-stripe"></div>
            <ul class="offer-list">
              <li>до '.$item['amount'].' руб.</li>
              <li>от '.$item['percent'].' % в день</li>
              <li>от '.$item['min_year'].' до '.$item['max_year'].' лет</li>
            </ul>
            <!-- <a class="offer-button "href="">Подать заявку</a> -->
            <a href="'.$item['link'].'" target="_blank">
                <button class="offer-button">Подать заявку</button>
            </a>
          </div>
        </div>';
      }
      else
      {
        if($r == 5)
        {
          echo '</div>
          </div>
          <div id="offer-block-wrapper">
            <div class="offer-block-2 offer-block-1 container">
              <div class="advertising-block row">
                <div class="grey-block col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12"></div>
              </div>
              <div class="offer-wrapper row">';
        }
         
          echo '<div class="offer col-lg-3 col-xl-4 col-md-4 col-sm-6 col-xs-12">
          <div class="inner-offer">
          <img src="/templates/common/img/offers/'.$item['img'].'.png" class="moneyman offer-logo" alt="'.$item['img'].'.png">
            <div class="moneyman grey-stripe"></div>
            <ul class="moneyman offer-list">
            <li>до '.$item['amount'].' руб.</li>
            <li>от '.$item['percent'].' % в день</li>
            <li>от '.$item['min_year'].' до '.$item['max_year'].' лет</li>
            </ul>
            <!-- <a class="offer-button "href="">Подать заявку</a> -->
            <a href="'.$item['link'].'" target="_blank">
                <button class="offer-button">Подать заявку</button>
            </a>
          </div>
        </div>'; 
      } 
  }?>
                    </div>
                    <div class="advertising-block row">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12 text-block">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'footer.php';?>