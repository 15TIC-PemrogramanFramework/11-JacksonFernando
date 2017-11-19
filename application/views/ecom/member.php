<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url('login/css/style.css') ?>">

  
</head>

<body>
  <body>
	<header role="banner">
	

		<nav class="main-nav">
			<ul>
				<!-- aaaa -->=<q></q>				<li><a class="cd-signin" href="#0">Sign in</a></li>
			</ul>
		</nav>
	</header>

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
			     <form action="<?php echo base_url().'ecom2/sign_in' ?>" autocomplete="on" method="post" class="cd-form" id="myform" > 
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
						  <input type="submit"  value="Login" class="full-width" onclick="document.getElementById('myform').submit()"/> 
					
					</p>
				</form>
				
	
			</div>

			<div id="cd-signup"> <!-- sign up form -->
				  <?php echo $this->session->flashdata('msg'); ?>
				<form class="cd-form" action="<?php echo site_url('ecom2/daftar') ?>" autocomplete="on" method="post">
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
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url('login/js/index.js') ?>"></script>

</body>
</html>
