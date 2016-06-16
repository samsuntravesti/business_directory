<?php
	require_once('/home/git/Desktop/businessDirectory/api/config.php');
	require_once(SITE_URI . '/api/functions.php');
	
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Business Directory</title>
		<link rel="stylesheet" href="<?php SITE_URL ?>/styles/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php SITE_URL ?>/styles/main.css">		

		<script type="text/javascript" src="<?php SITE_URL ?>/scripts/jquery-2.2.2.min.js"></script>
		<script type="text/javascript" src="<?php SITE_URL ?>/scripts/bootstrap.js"></script>
		<!-- <script type="text/javascript" src="<?php SITE_URL ?>/scripts/jQuery.paginate.js"></script>  -->
		<script type="text/javascript" src="<?php SITE_URL ?>/scripts/main.js"></script>
	
    				
	</head>
	<body>
		<div class="container">
<section>
			<div class="row">
				<div class="col-md-5"><a href="/template/search.php" id="logopic"><img src="<?php SITE_URL ?>/logo1.png" id="logoId"> </a></div>
					<div class="col-md-7">
						<form action="<?php echo  SITE_URL . '/template/search.php' ?>" method="get">
							<div class="input-group">
	     						 <input type="text" class="form-control" placeholder="Կազմակերպության անուն" id="search" name="title" value="<?php echo $_GET['title']; ?>">
	     						 <span class="input-group-btn">
      								  <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>.</button>
     							 </span>
	  					    </div>
  					   	</form> 
  					   <!-- 	<a href="<?php echo  SITE_URL . '/template/modification.php'?>"> -->
						<div class="btn-group" role="group" aria-label="...">
  							<button type="button" class="btn btn-primary" id="addbutton" type="submit"><a href="<?php echo  SITE_URL . '/template/modification.php'?>" value="aaaaa">Ավելացնել</a></button>
  						</div>
  						<!-- </a> -->
 					 </div>	
			</div>
</section>