<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Halaman Login</title>
	<link rel="stylesheet" href="<?php base_url(); ?>assets/css/login.css" type="text/css" />
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

<section class="container">
<div class="login">
<h1>Please Login to Enter!</h1>

    <?php echo form_open('login/proseslogin') ?>
		  <input type="email" name="email" placeholder="input email" />
   		<input type="password" name="pass" placeholder="input password" />
    	<p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
       <p class="submit"><input type="submit" name="login" value="login" /></p>
    <?php echo form_close () ?>

</div>
    <div class="login-help">
      <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div>
</section>


  <section class="about">
    <p class="about-links">
      <a href="" target="_parent">Altima Group</a>
      <a href="" target="_parent">Central Kitchen</a>
    </p>
    <p class="about-author">
      &copy; 2017 <a href="http://instagram.com/israpamungkas" target="_blank">MUHAMAD ISRA PAMUNGKAS</a><br>
    
  </section>

  </div>
</div>
	</body>
</html>
