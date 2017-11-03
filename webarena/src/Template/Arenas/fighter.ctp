<title>Fighter</title>
<body>

  <style>
  .bg-1 { 
     background-image:url('https://images4.alphacoders.com/744/74468.jpg'); 
    background-position: center;}
  .bg-2 {  background-image:url('https://lostandtaken.com/wp-content/uploads/edd/2016/02/black-rock-concrete-texture-15.jpg'); 
     background-size: cover;
    color: #ffffff;}
  .container-fluid {
      padding-top: 100px;
      padding-bottom: 100px;}
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
      <p class="text-center"><strong>Create Fighter</strong></p><br>
      <a href="#demo" data-toggle="collapse">
       <?php echo $this->Html->image('fighter2.png', ['alt'=>'Cake2', 'height' => 130, 'width'=>130]); ?>
      </a>
      <div id="demo" class="collapse">
<br/>
<a class="btn btn-primary" type="button" name="login" value="Login" onclick="javascript:location.href='create_fighter'">Create Fighter</a>
    <br/>
        <i><p>click here to create an Avatar</p></i>
        
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Change Avatar</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
 <?php echo $this->Html->image('changeavatar.png', ['alt'=>'Cake2', 'height' => 130, 'width'=>130]); ?>
       
      </a>
 <div id="demo2" class="collapse">
<br/>
<a class="btn btn-primary" type="button" name="Register" value="Register" onclick="javascript:location.href='avatar'">Change Avatar</a>
    
     
       <br/>
        <i><p>Click here to change your Avatar</p></i>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Guilde</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
<?php echo $this->Html->image('fightclub.png', ['alt'=>'Cake2', 'height' => 130, 'width'=>130]); ?>
      
      </a>
      <div id="demo3" class="collapse">
   <br/>
     <a class="btn btn-primary" type="button" name="lost" value="Password Lost" onclick="javascript:location.href='nouvelleguilde'">New Guilde</a>

  
      <br/>
        <i><p>click here to create a new guilde</p></i>
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
