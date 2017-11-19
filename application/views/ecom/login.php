
 <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login/Regis</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('ecommerce2/css/style2.css') ?>" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		
    </head>

    <body>
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#passworddaftar").val();
            var confirmPassword = $("#konfirmasipassworddaftar").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>


        <div class="container">
           
            <header>
           
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="<?php echo site_url('ecom2/sign_in') ?>" autocomplete="on" method="post" > 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="email" class="uname" > Your email </label>
                                    <input id="email" name="email" required="required" type="text" placeholder="username" value="<?php echo set_value('username') ?>"/><?php echo form_error('email') ?>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password" value="<?php echo set_value('password') ?>" /><?php echo form_error('password') ?> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                 <p class="signin button"> 
                                     
                                    <input type="submit" id="btnSubmit" value="Login"/> 
                                
                                </p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <?php echo $this->session->flashdata('msg'); ?>
                            <form  action="<?php echo site_url('ecom2/daftar') ?>" autocomplete="on" method="post" > 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="nama_mem" class="uname" >Your username</label>
                                    <input id="nama_mem" name="nama_mem" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="email" class="youmail"  > Your email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                              
                                <p> 
                                    <label for="password" class="youpasswd" >Your password </label>
                                    <input id="passworddaftar" name="passworddaftar" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="konfirmasipassworddaftar" class="youpasswd" >Please confirm your password </label>
                                    <input id="konfirmasipassworddaftar" name="konfirmasipassworddaftar" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                               <input type="hidden" name="id_mem" >
                                <p class="signin button"> 
			                         
                                    <input type="submit" id="btnSubmit" value="Signup" /> 
                                
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>

                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>