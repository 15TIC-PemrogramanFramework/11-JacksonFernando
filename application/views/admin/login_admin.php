<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Completed Animated Form</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="<?php echo base_url('loginadmin/css/style.css') ?>">

  
</head>

<body>
 <form role="form" action="" method="POST">
  <label>
    <input type="text"  name="user" type="user" required />
    <div class="label-text">Username</div>
  </label>
  <label>
    <input type="password" name="pass" type="pass" required />
    <div class="label-text"  >Password</div>
  </label>
  <button type="submit">Submit</button>

</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
