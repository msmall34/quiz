  <?php
session_start();
?>
<?php 
include 'header.php';
require 'config.php';
?>
        
        <div class="container result">

        <div class="session">
            <p class="text-center">
                Merci <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?> <br>
                Vous avez complété ce QCM !! 

            </p>
        </div>
            
           <div class="row">

                  
                  <div class="col-xs-10 col-sm-6 col-lg-6 center"> 
                    <div style="margin-top: 10%; margin-bottom:10%">
                        <p>Votre score est de : <span class="answer"><?php echo $right_answer;?> / <?php echo $count;?> bonnes réponses !</span></p>
                        <p>Nombre de mauvaises réponses : <span class="answer"><?php echo $wrong_answer;?></span></p>
                        <p>Nombre de questions auxquelles vous n'avez pas répondu : <span class="answer"><?php echo $unanswered;?></span></p>                   
                    </div> 
                   </div>

                  <div class=" right"> 
                     <a href="<?php echo BASE_PATH;?>" class='btn btn-success'>Commencer un nouveau quiz!!!</a>                   
                     <a href="<?php echo BASE_PATH.'logout.php';?>" class='btn btn-success'>Se deconnecter</a>
                  </div>

            </div>    
            <div class="row">    

            </div>
        </div>

<?php
  include 'footer.php';
?>
  