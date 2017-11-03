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
            <li class="active"><a href="accueil">Home</a></li>
            <li><a href='connection'>Connexion</a></li>
            <li><a href='fighter'>Fighter</a></li>
            <li><a href='sight'>Vision</a></li>
            <li><a href='diary'>Journal</a></li>
            <li><a href='nouvelleguilde'>New guilde</a></li>
            <li><a href='avatar'>Avatar & Upgrades</a></li>
            <li><a href='logout'>Deconnexion</a></li>
            
          </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li>
                <div class="inset">
                  <img src="http://icdn.pro/images/fr/c/l/club-fight-savon-icone-7160-128.png",  height="55" width="55">
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
      
      <div align="right">
      <h5> &diams; Brice Koenig <br/> &diams; Yacine Zidi <br/> &diams; Raphael Attali  <br/> &diams; Coraline Amemoutou<br/> option A & B & F </h5>
      <a href='https://github.com/ra162512/web_project/commits/master'>Versions.log  </a>
      <h4>    <?php echo $message;?> </h4>
      </div>
  </footer>
</html>
