<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $this->load->view('setting/header') ?>
   
<html>
<body>
    <div class="banner">
      <div class="container"> 
        <h1>Zero 2 Communication</h1>
        <p>Temukan smartphone baru hanya ada disini. Cart dan transaksi dapat di akses ketika sudah mendaftar dan login.</p>
  <a href="#content" class="scroll down"><img src="<?php echo base_url('ecommerce2/images/arr.png') ?>" alt=""></a>
      </div>
    </div>
    <div class="content" id="content">
      <div class="content-top">
        <div class="container">
          <div class="content-top-at">
          <div class="content-top-grid">
            <a class="news-letter" href="#">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked="" disabled><i> </i>IOS</label>
            </a>
            <a class="news-letter" href="#">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked=""  disabled><i> </i>ANDROID</label>
            </a>
      
          <div class="clearfix"> </div>
          </div>
        <a href="<?php echo site_url('ecom/tampil_product'); ?>" class="product-in hvr-shutter-in-horizontal">Lihat Semua Produk</a>
        <div class="clearfix"> </div>
        </div>
      </div>
    </div>
    <!---->
    <div class="container">
      <div class="content-grid">
        <h3 class="future">IOS</h3>
          <p class="five"></p>
          <div class="clearfix"> </div>
        <ul id="flexiselDemo1">     
              <?php foreach ($data_produk_ios as $key => $row) { ?>
            <li><div class="men-grid">
          <a href="<?php echo site_url()?>ecom/detail/<?php echo $row->id_prod;?>"><img class="img-responsive" src="<?php echo base_url('/uploads/'.$row->gambar); ?>" alt=""></a>
            <div class="value-in">
              <p><?php echo $row->nama_prod; ?></p>
              <span>RP.<?php echo $row->harga; ?></span>
              <div class="clearfix"> </div>
            </div>
           
            </div></li>
           <?php } ?>
            
          
          </ul>
                <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo1").flexisel({
        visibleItems: 3,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,        
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
            portrait: { 
              changePoint:480,
              visibleItems: 1
            }, 
            landscape: { 
              changePoint:640,
              visibleItems: 2
            },
            tablet: { 
              changePoint:768,
              visibleItems: 2
            }
          }
        });
        
    });
  </script>
  <script type="text/javascript" src="<?php echo base_url('ecommerce2/js/jquery.flexisel.js') ?>"></script>
      </div>
      <div class="content-grid">
        <h3 class="future-in">ANDRO</h3>
          <p class="five"></p>
          <div class="clearfix"> </div>
        <ul id="flexiselDemo2">     
                  <?php foreach ($data_produk_android as $key => $row) { ?>

            <li><div class="men-grid">
          <a href="<?php echo site_url()?>ecom/detail/<?php echo $row->id_prod;?>"><img class="img-responsive" src="<?php echo base_url('/uploads/'.$row->gambar) ?>" alt=""></a>
            <div class="value-in">
              <p><?php echo $row->nama_prod ?></p>
              <span>Rp.<?php echo $row->harga ?></span>
              <div class="clearfix"> </div>
            </div>
             
            </div></li>
            
              <?php } ?>
          </ul>
                <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo2").flexisel({
        visibleItems: 3,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,        
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
            portrait: { 
              changePoint:480,
              visibleItems: 1
            }, 
            landscape: { 
              changePoint:640,
              visibleItems: 2
            },
            tablet: { 
              changePoint:768,
              visibleItems: 2
            }
          }
        });
        
    });
  </script>
  <script type="text/javascript" src="<?php echo base_url('ecommerce2/js/jquery.flexisel.js') ?>"></script>
      </div>
    </div>

   <?php $this->load->view('setting/footer') ?>
</body>
</html>
