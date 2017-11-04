
<title>Messaging</title>

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:40,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact">
			<div class="section-content">
				<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Scream & Message</span></h1>
				
			</div>
			<div class="contact-section">
			<div class="container">
				
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<div class="crier form">
                                                        <?= $this->Flash->render() ?>
                                                         <?= $this->Form->create('envoyer') ?>
                                                            <fieldset>

                                                                <legend><?= __("Scream Action"); ?></legend>

                                                                 <?= $elem8;?> <br/>
                                                                 <?= $wesh; ?>
                                                                  <?= $this->Form->control('Scream',[ 'class' => 'form-control']); ?>

                                                                <?=  $this->Form->hidden('choix',['value' =>3]); ?>
                                                            </fieldset>
                                                            <br/>
                                                        <?= $this->Form->button(__('Scream') ,[ 'class' => 'btn btn-default btn-md glyphicon glyphicon-bullhorn']);  ?>
                                                 <?= $this->Form->end() ?>
                                                         </div>

				  		</div>
  
                                           
                        <legend><?= __("Read Message"); ?></legend>
                                                 <div class="lire message">
                                                
                                                <?= $this->Flash->render() ?>
                                                <?= $this->Form->create('recevoir') ?>
                                                    <fieldset>

                                                        <?= "From who do you want to read the message ?"; echo $this->Form->select('namefrom',$list3,['class'=>'btn btn-default dropdown-toggle btn-sm']); ?>
                                                   <br/>  
                                                    <?= "Choose with which fighter"; echo $this->Form->select('namewith',$list4,['class'=>'btn btn-default dropdown-toggle btn-sm']); ?>
                                                   <br/>  
                                                      <?=  $this->Form->hidden('choix',['value' =>2]); ?>


                                                    </fieldset>

                                                <?= $this->Form->button(' Read', [ 'class' => 'btn btn-default btn-md glyphicon glyphicon-eye-open']);  ?>

                                                <?= $this->Form->end() ?>

				  	</div>
                                </div>




<div class="message form">
<?= $this->Flash->render() ?>
<?= $this->Form->create('envoyer') ?>
    <fieldset>
      
        <legend><?= __("Message Inbox"); ?></legend>
        
        <?= $elem1; ?>  <br/>
        <?= "Choose your fighter : "; echo $this->Form->select('namefrom',$list,['class'=>'btn btn-default btn-sm dropdown-toggle','data-toggle'=>'dropdown', 'aria-haspopup'=>'true', 'aria-expanded'=>'true']); ?>
         <br/>
        <?= "Chose the fighter you want to send the message : "; echo $this->Form->select('namedest',$list1,['class'=>'btn btn-default btn-sm dropdown-toggle','data-toggle'=>'dropdown', 'aria-haspopup'=>'true', 'aria-expanded'=>'true']); ?>
         <br/> 
<?= $this->Form->control('title',[ 'class' => 'form-control' ]); ?>
<br/>
        <?= $this->Form->control('message',[ 'class' => 'form-control' ]); ?>   
        <?=  $this->Form->hidden('choix',['value' => 1]); ?>
    </fieldset>
    <br/>
<?= $this->Form->button(' Send',[ 'class' => 'btn btn-default btn-md glyphicon glyphicon-send']); 

 
?>
    
<?= $this->Form->end() ?>




                                                <br/>

                                                 <?php

                                                          if($mess==2){

                                                            $titre=$listmessages[0];
                                                             $message=$listmessages[2];
                                                             $date=$listmessages[3];
                                                             $taille=count($message);

                                                             for($i=0;$i<$taille;$i++)
                                                                {   
                                                                    echo " de: ";
                                                                    echo $listnom[$i];
                                                                    echo ", titre : ";
                                                                    echo $titre[$i];
                                                                    echo ", message : ";
                                                                    echo $message[$i];
                                                                    echo "                date ";
                                                                    echo $date[$i];
                                                                    ?> <br/> <?php

                                                                }


                                                          }
        ?>
</div>
</div>
			  			
					</div>		
		
				

		</section>




<style>
.content-header{ font-family: 'Oleo Script', cursive; font-size: 45px;}
.section-content{ text-align: center;}
#contact{ font-family: 'Teko', sans-serif; padding-top: 60px; width: 100%; width: 100vw; height: 550px;
background: #00ff00 url("https://lostandtaken.com/wp-content/uploads/edd/2016/02/black-rock-concrete-texture-15.jpg");  background-position: center; color : #fff; }
label{font-size: 1.3em; line-height: 1em; font-weight: normal;}
</style>