<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <title>UMust See</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" media="screen">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header>		
		<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			<li><div id="logo"></div></li>
            <li class="menu-hover"><a href="">Accueil</a></li>
			<li class="menu-hover"><a href="">Combat du jour</a></li>
            <li class="dropdown menu-hover">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cat&eacute;gories <b class="caret"></b></a>
              <ul class="dropdown-menu">
				<?php
				foreach($view_data['categorie'] as $row)
				{
				?>
                <li><a href="#"><?php echo $row['titre']?></a></li>
				<?php } ?>
                <!--<li class="divider"></li>
                <li class="dropdown-header">Nav header</li>-->
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="menu-hover"><a href="../navbar/">Connexion</a></li>
            <li class="menu-hover"><a href="../navbar-static-top/">Inscription</a></li>
            <li><button type="button" class="btn btn-default" id="upload">Ajouter</button></li>
          </ul>
        </div>
	  </div>
    </div>
  </header>
	<div class="container" id="page">
		<div class="row MarginTop5">
		  <div class="col-xs-5 col-xs-pull-7">	
			<form role="form">
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			  </div>
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Check me out
				</label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		  </div>
		  <div class="col-xs-2 col-xs-push-5">
			<div class="bordureVerticale"></div>
			<div class="texteSeparation">
				ou
			</div>
			<div class="bordureVerticale"></div>
		  </div>
		   <div class="col-xs-5 col-xs-push-7">
				<form role="form">
				  <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="form-group">
					<label for="exampleInputFile">File input</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Example block-level help text here.</p>
				  </div>
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Check me out
					</label>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
		  </div>
		</div>
		</div>
	</div>
	<div id="footer">
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/infscroll.js'; ?>"></script>
		<script>

		</script>
  </body>
</html>