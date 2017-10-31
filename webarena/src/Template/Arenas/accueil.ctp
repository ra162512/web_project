<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  .bg-1 { 
     background-image:url('http://www.journaldugeek.com/files/2013/07/Fight-Club.jpg'); 
    height: 80%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

     
  }
  .bg-2 { 
 
     background-image:url('https://lostandtaken.com/wp-content/uploads/edd/2016/02/black-rock-concrete-texture-15.jpg'); 
    height: 80%; 
     background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
color: #ffffff;


  }
  
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  </style>
</head>
<body>

<div class="container-fluid bg-1 text-center">
  
</div>

<div class="container-fluid bg-2 text-center" >
  <h3>Bienvenu dans FightClub, le jeu où vous allez devoir vous battre pour survivre</h3>
  <p>merci de selectionner une des catégories suivantes. <br> commencez par vous inscrire si vous n'avez jamais joué par le passé </p>
<button type="button" class="btn btn-success"  name="login" value="Login" onclick="javascript:location.href='Login'">Login</button>
                    
<button type="button" class="btn btn-danger" name="createFighter" value="Create Fighter" onclick="javascript:location.href='Fighter'">Create Fighter</button>

 <button type="button" class="btn btn-success"  name="play" value="Play" onclick="javascript:location.href='arena'">Play</button>

</div>

<div class="container-fluid bg-1 text-center">
  
</div>

</body>
</html>








