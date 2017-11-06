<?php echo $this->Html->docType();?>

<html lang="en">

    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->fetch("css"); ?>


  
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  </head>
  
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="accueil">WEBARENA</a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="accueil"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href='connection'><span class="glyphicon glyphicon-log-in"> Connexion</a></li>
            <li><a href='fighter'><span class="glyphicon glyphicon-user"> Fighter</a></li>
            <li><a href='sight'><span class="glyphicon glyphicon-play"> Vision</a></li>
            <li><a href='diary'><span class="glyphicon glyphicon-calendar"> Journal</a></li>
            <li><a href='nouvelleguilde'><span class="glyphicon glyphicon-globe"> New Guilde</a></li>
            <li><a href='avatar'><span class="glyphicon glyphicon-pencil"> Avatar</a></li>
            <li><a href='logout'><span class="glyphicon glyphicon-log-out"> Deconnexion</a></li>
            <li><a href='message'> <span class="glyphicon glyphicon-envelope"></span>Messaging</a></li>

          </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li>
                <div class="inset">
                  <img src="http://d2qq4423n7kgsb.cloudfront.net/store-kiss-clothing-55afd98e25b53/uploaded/thumbnails/soap_5623bd594e71c_746xauto-png-keep-ratio_5819b557c8640_746xauto-png-keep-ratio.png?1478079831",  height="40" width="55">
                </div>
              </li>
            </ul>
        </div>
         
      </div>
        
    </nav>
     
    <div class="container" style="margin-top: 60px;">
        <?php echo $this->fetch("content"); ?>
        
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->fetch("script"); ?>
  </body>
  <footer>
      <br/>
      <br/>
      <br/>
      
      <div style="margin-left:90%;">
      <h5> &diams; Brice Koenig <br/> &diams; Yacine Zidi <br/> &diams; Raphael Attali  <br/> &diams; Coraline Amemoutou<br/> option A & B & F </h5>
      <a href='https://github.com/ra162512/web_project/commits/master'>Versions.log  </a>
      <h4>    <?php echo $message;?> </h4>
      </div>
  </footer>
</html>
