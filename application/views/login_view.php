<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo base_url() ?>assets/images/logo-javawebmedia.png" rel="shortcut icon">
<title><?php echo $title ?></title>
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
<section class="login">
	<h1>Login Page</h1>
    
     <?php
	 // Cetak session
	if($this->session->flashdata('sukses')) {
		echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
	}
	// Cetak error
	echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
	?>
    
    <form action="<?php echo base_url('login') ?>" method="post">
      <p>
        <label for="username">Username</label>
        <input class="form-control"type="text" name="username" id="username" placeholder="Username">
        
      </p>
      <p>
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
      </p>
      <p>
        <input class="btn btn-danger" type="submit" name="submit" id="submit" value="Login" class="full">
      </p>
    </form>
    <footer>Web design by 12141383</footer>
</section>
</div>
</body>
</html>
