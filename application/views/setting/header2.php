<!DOCTYPE html>
<html>
<head>
<!--Form daftar/login-->
 <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

 <link rel="stylesheet" href="<?php echo base_url('login/css/style.css') ?>">
 <!--Tutup Form-->
<link href="<?php echo base_url('ecommerce2/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url('ecommerce2/css/style.css?version=1') ?>" rel="stylesheet" type="text/css" media="all" /> 
<link href="<?php echo base_url('ecommerce2/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
<!--//theme-style-->
<link rel="stylesheet" href="<?php echo base_url('ecommerce2/css/etalage.css?version=1') ?>">

<!--fonts-->
<link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="<?php echo base_url('ecommerce2/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('ecommerce2/js/jquery.etalage.min.js') ?>"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!--//slider-script-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>


<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

<script type="text/javascript" src="<?php echo base_url('ecommerce2/js/move-top.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('ecommerce2/js/easing.js') ?>"></script>
<script  src="<?php echo base_url('login/js/index.js') ?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>


</head>
<body>
<!--header-->
	<div class="header" >
    <div class="container">
      <div class="header-top">    
        <div class="logo">
      <a href="<?php echo site_url('ecom/index') ?>"><img src="<?php echo base_url('ecommerce2/images/logo2.png') ?>" alt=""></a>
        </div>
 
        <nav class="top-nav">

          <span class="menu"><img src="<?php echo base_url('ecommerce2/images/menu.png') ?>" alt=""> </span>
          <ul class="icon1 sub-icon1">
              
              
              <li><a  href="#" data-toggle="dropdown" >Email:<?php echo $this->session->userdata('email'); ?></a>
               <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <div class="main-nav" >
            
                <a class="dropdown-item" href="#0" ><b>Login</b></a>  
              <!--Tutup Main-Nav -->   
              </div>
                  <a class="dropdown-item" href="<?php echo site_url('ecom2/logout') ?>"><b>Logout</b></a>
              </li>        
              <li><a href="<?php echo site_url('ecom/index') ?>" >Home</a></li>
              <li><a href="<?php echo site_url('ecom/tampil_product'); ?>" > Products</a></li> 
               <?php if ($this->session->userdata('email') == TRUE ): ?>
               <li><a href="#"><i></i></a>

                <!--KODING CART -->
                <ul class="sub-icon1 list">
                  <h3><b>CART<b></h3>
                    <?php foreach ($data_produk_cart as $key => $row) {?>
                    <div class="shopping_cart">
                      <div class="cart_box">
                        <div class="message">
                     
                       <div class="alert-close" onclick="hapuscart(<?php echo $row->id_cart;?>)"></div>  
 
                         <div class="list_img"><img src="<?php echo base_url('/uploads/'.$row->gambar) ?>" class="img-responsive" alt=""></div>
                         <div class="list_desc"><h4><a href="#"><?php echo $row->nama_prod ?></a></h4>
                          <p>RP.<?php echo $row->harga ?></p>
                          <a href="#" class="offer"><?php echo $row->jumlah ?> jumlah</a>
                        </div>
                        <div class="clearfix"></div>

                      </div>
                    </div>                            
                  </div>
                  <script type="text/javascript">
  
   function hapuscart(id)
    {
     
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('ecom/hapus_cart')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               alert('Item telah di hapus dari cart');
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      
    }


</script>

                  <?php } ?>
                    <div class="check_button"><a href="<?php echo site_url('ecom/checkout') ?>">Checkout</a></div>
                  <div class="clearfix"></div>
                </ul>
              </li>
             <?php endif ?>
          </ul>
          <script>
            $("span.menu").click(function(){
              $(".top-nav ul").slideToggle(500, function(){
              });
            });
          </script>
          <!--Tutup top nav-->  </nav>
          <div class="clearfix"> </div>
        </div>
      </div>
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
      <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
          <li><a href="#0">Sign in</a></li>
          <li><a href="#0">New account</a></li>
        </ul>

         <div id="cd-login"> <!-- log in form -->
         <form id="signin" method="post" class="cd-form"  > 
    
          <p class="fieldset">
            <label class="image-replace cd-email" for="email">E-mail</label>
            <input id="email" class="full-width has-padding has-border"  name="email" required="required" type="text" placeholder="email" /><?php echo form_error('email') ?>
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="password">Password</label>

            <input id="password"  class="full-width has-padding has-border"  name="password" required="required" type="password" placeholder="password" value="<?php echo set_value('password') ?>" /><?php echo form_error('password') ?> 

            <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <input type="submit"  value="Login" class="full-width" onclick="masuk()"> 

          </p>
        </form>
        

      </div>
 <div id="cd-signup"> <!-- sign up form -->
        <?php echo $this->session->flashdata('msg'); ?>
        <form class="cd-form"  autocomplete="on" method="post" id="daftar">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Username</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="nama_mem">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
            <span class="cd-error-message">Error message here!</span>
          </p>
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-kota">Kota</label>
            <input class="full-width has-padding has-border" id="signup-kota" type="text" placeholder="Kota" name="kota">
            <span class="cd-error-message">Error message here!</span>
          </p>
             </p>
            <p class="fieldset">
            <label class="image-replace cd-username" for="signup-kodepos">Alamat</label>
            <input class="full-width has-padding has-border" id="signup-kodepos" type="text" placeholder="Alamat" name="alamat">
            <span class="cd-error-message">Error message here!</span>
          </p>

            <p class="fieldset">
            <label class="image-replace cd-username" for="signup-kodepos">Kode Pos</label>
            <input class="full-width has-padding has-border" id="signup-kodepos" type="number" placeholder="Kode Pos" name="kode_pos">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="passworddaftar">
            <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>
          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Konfirmasi Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="konfirmasipassworddaftar" >
            <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>
          <input type="hidden" name="id_mem" >

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Create account" onclick="daftar()">
          </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-signup -->
 <div id="cd-signup"> <!-- sign up form -->
        <?php echo $this->session->flashdata('msg'); ?>
        <form class="cd-form"  autocomplete="on" method="post" id="daftar">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Username</label>
            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="nama_mem">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="passworddaftar">
            <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>
          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Konfirmasi Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="konfirmasipassworddaftar" >
            <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span>
          </p>
          <input type="hidden" name="id_mem" >

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Create account" onclick="daftar()">
          </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-signup -->

      
      <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
  </div> <!-- cd-user-modal -->
</body>

<script type="text/javascript">
  
   function masuk()
    {
      var url;
       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('ecom2/sign_in') ?>',
            type: "POST",
            data: $('#signin').serialize(),
            success: function(data)
            {

            console.log(data);
            location.reload();
         
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Id atau password salah');
            }
        });
    }
     function daftar()
    {
      var url;
       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('ecom2/daftar') ?>',
            type: "POST",
            data: $('#daftar').serialize(),
            success: function(data)
            {
            location.reload();
            console.log(data);
            alert('Akun anda telah terdaftar');
         
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
               alert('Gagal Daftar silahkan cek format email dan password anda');
            }
        });
    }
 </script>


    </div>
		

		<div class="banner banner-in">
			
		</div>
		