<!DOCTYPE html>
<html>
  <head>
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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
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
            <li><a href="../navbar/">Log in</a></li>
            <li><a href="../navbar-static-top/">Sign up</a></li>
            <li><button type="button" class="btn btn-default" id="upload">Upload</button></li>
          </ul>
        </div>
	  </div>
    </div>
  </header>
	<div class="container" id="page">
		<div class="row">
		  <div class="col-xs-9 col-xs-pull-3">
		  		<div class="row">
					<div class="col-xs-12">
						<div class="slider">
							<div class="Post">
								<div class="PostTitle">
									Lorem ipsum dolor sit amet
								</div>
								<img src="<?php echo base_url(); ?>assets/img/test.jpg" />
								<div class="PostText internal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="slider">
						<div class="borderTop"></div>
							<div class="Post">
								<div class="PostTitle">
									Lorem ipsum dolor sit amet
								</div>
								<img src="<?php echo base_url(); ?>assets/img/test.jpg" />
								<div class="PostText internal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="slider">
							<div class="borderTop"></div>
							<div class="Post">
								<div class="PostTitle">
									Lorem ipsum dolor sit amet
								</div>
								<img src="<?php echo base_url(); ?>assets/img/test.jpg" />
								<div class="PostText internal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac magna non augue porttitor scelerisque ac id diam. Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
						</div>
					</div>
				</div>
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
            <li><a href="#About">About</a></li>
            <li><a href="#FAQ">FAQ</a></li>
            <li><a href="#Privacy">Privacy</a></li>
			<li><a href="#Contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
          </ul>
        </div>
	  </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function () {
				$('.slider').click(function () {
					$(this).find('.internal').slideToggle();
				});
			});
		</script>
  </body>
</html>