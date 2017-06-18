<!-- Start Header -->
	<br />
    <header style="float: right;">
    <br />Hai <a href="<?php echo base_url('profil') ?>" title="Update profil">
    <?php echo ucfirst($this->session->userdata('username')); ?>
    </a> | <a href="<?php echo base_url('login/logout') ?>" title="Logout">Logout</a></header>
    <!-- Start Nav -->
    <nav>
    	<ul class="nav nav-pills">
        	<li role="presentation" class="active"><a href="<?php echo base_url('dasbor') ?>">Home</a></li>
            <li role="presentation"><a href="<?php echo base_url() ?>assets/post.html">Post</a></li>
            <li role="presentation"><a href="<?php echo base_url('index.php/user_controller/user') ?>">Update User</a></li>
            <li role="presentation"><a href="<?php echo base_url() ?>assets/templates.html">Profile</a></li>
</ul>
    </nav>
    <!-- Start Article -->
    <article style="margin-top: 20px;" class="jumbotron">
      <h1><?php echo 'Admin Control Panel' ?></h1>