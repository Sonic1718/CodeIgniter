<!DOCTYPE html>
<html>
<head>
	<title>CI_Blog</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
	<?php 
		if(!empty($this->session->userdata('promp'))){
			echo $this->session->userdata('promp');
			$this->session->unset_userdata('promp');
		}
    ?>
	<nav id="navigationc" class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			        <span class="sr-only">Toggle-navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href=""></a>
			    </div>
			    <div class="container-fluid">
			      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			        <ul class="nav navbar-nav">
			          <li><a href="<?php echo base_url(); ?>">HOME</a></li>
			          <li><a href="<?php echo base_url(); ?>/posts/">USERS</a></li> 
			          <li><a href="<?php echo base_url(); ?>/about">ABOUT USS</a></li> 
			          <?php if(!empty($this->session->userdata('logged_in'))){ ?>
			          		<li>
			          			<a>
				          			<?php 
				          				$user = $this->session->userdata('logged_in'); 
				          				echo "Welcome ".$user['username'];
				          			?> 
			          			</a>
			          			<a href="<?php echo base_url('users/logout'); ?>">LOGOUT</a>
			          		</li>
			          <?php }else{ ?>
			           		<li><a href="<?php echo base_url('users/login'); ?>">LOGIN</a></li> 
			           <?php } ?>
			        </ul>
			    </div>
			</div>
		</div>
	</nav> <!-- End Navigation -->


