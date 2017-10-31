

<body>

  <style>
  .bg-1 { 
     background-image:url('https://i.pinimg.com/736x/e0/bc/d3/e0bcd3c571344333d26398471047549d--fight-club--the-fight-club.jpg'); 
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
  
   <br/>
   <br/>
<div class="container text-center">
  
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Login</strong></p><br>
      <a href="#demo" data-toggle="collapse">
       <?php echo $this->Html->image('login.png', ['alt'=>'Cake2', 'height' => 130, 'width'=>130]); ?>
      </a>
      <div id="demo" class="collapse">
<br/>
<a class="btn btn-primary" type="button" name="login" value="Login" onclick="javascript:location.href='Login'">LOGIN</a>
    <br/>
        <i><p>click here for Login</p></i>
        
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Register</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
 <?php echo $this->Html->image('create.png', ['alt'=>'Cake2', 'height' => 130, 'width'=>130]); ?>
       
      </a>
 <div id="demo2" class="collapse">
<br/>
<a class="btn btn-primary" type="button" name="Register" value="Register" onclick="javascript:location.href='add'">Register</a>
    
     
       <br/>
        <i><p>Click here for register</p></i>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Password Lost</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
<?php echo $this->Html->image('passwordloss.png', ['alt'=>'Cake2', 'height' => 130, 'width'=>130]); ?>
      
      </a>
      <div id="demo3" class="collapse">
   <br/>
     <a class="btn btn-primary" type="button" name="lost" value="Password Lost" onclick="javascript:location.href='Afficherpassword'">Password Lost ?</a>

  
      <br/>
        <i><p>click here if you loose your password</p></i>
      </div>
    </div>
  </div>
</div>

</body>
</html>


</div>

<div class="container-fluid bg-1 text-center">
  
</div>

</body>
