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
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
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
		<div class="row">
		  <div class="col-xs-9 col-xs-pull-3">
		  <?php $this->load->view($view_name, $view_data); ?>

		  </div>
		   <div class="col-xs-3 col-xs-push-9">
			<div class="pub MarginTopBottom1">
				pub
			</div>
			<div class="pub MarginTopBottom1">
				pub
			</div>
			<div class="pub MarginTopBottom1">
				pub
			</div>
		  </div>
		</div>
	</div>
	<div id="footer">
     <div class="navbar navbar-default navbar-fixed-bottom" id="navFooter" role="navigation">
      <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="menu-hover"><a href="#About">&Agrave; propos</a></li>
            <li class="menu-hover"><a href="#FAQ">FAQ</a></li>
            <li class="menu-hover"><a href="#Privacy">Vie priv&eacute;</a></li>
			<li class="menu-hover"><a href="#Contact">Nous contacter</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/" class="menu-hover">Haut</a></li>
          </ul>
        </div>
	  </div>
    </div>
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