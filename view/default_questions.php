 <?php
session_start();
?>


    <div class="container question">
    	
      	<div class="session">
        	<h2 class="text-center">
           		 Bonjour <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?> 
        	</h2>
    	</div>

        <p class="text-center">
			Veuillez remplir le QCM ci-dessous.
        </p>

        <p class="text-center">
          	Pour votre information, vous ne pouvez choisir qu'une seule bonne réponse par question
        </p>

        <hr>
        <form class="form-horizontal" role="form" id='login' method="post" action="resultat.php">
          <?php 
          
          // $questions = new Questions();
          // $posts = $questions -> queryQuestions();
          // $rows = count($posts);
          // print_r($rows);
      


          $res = mysql_query("SELECT * FROM quizVtrois_questions INNER JOIN quizVtrois_reponses ON quizVtrois_questions.id=quizVtrois_reponses.id WHERE category_id='$category' ORDER BY RAND()") or die(mysql_error());
          $rows = mysql_num_rows($res);
          $i=1;
                while($result=mysql_fetch_array($res)){?>

                    <?php if(($i==1) ||($i<1 || $i<$rows)){?>         
                    <div id='question<?php echo $i;?>' class='cont row'>
                        <div class="col-md-8">
                          <label class='questions' id="qname<?php echo $i;?>"> <?php echo $i?> . <?php echo $result['question_name'];?></label>
                        </div>
                        <div class="col-md-4 resp">
                          <input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><label><?php echo $result['answer1'];?></label>
                          <br/>
                          <input type="radio" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><label><?php echo $result['answer2'];?></label>
                          <br/>
                          <input type="radio" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><label><?php echo $result['answer3'];?></label>
                          <br/>
                          <input type="radio" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><label><?php echo $result['answer4'];?></label>                                                        
                        </div>
                        <button id='next<?php echo $i;?>' class='next btn btn-success' type='button'>Suivante</button>
                    </div> 
                    
                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont row'>
                      <div class="col-md-8"> 
                        <label class='questions' id="qname<?php echo $i;?>"><?php echo $i?> . <?php echo $result['question_name'];?></label>
                      </div>
                      <div class="col-md-4">
                        <input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><label><?php echo $result['answer1'];?></label>
                        <br/>
                        <input type="radio" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><label><?php echo $result['answer2'];?></label>
                        <br/>
                        <input type="radio" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><label><?php echo $result['answer3'];?></label>
                        <br/>
                        <input type="radio" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><label><?php echo $result['answer4'];?></label>                                                                    
                        <br/>            
                      </div>
                      <button id='next<?php echo $i;?>' class='next btn btn-success' type='submit'>Résultat</button>
					</div>
          <?php } $i++;} ?>

        </form>
      
    </div>

<?php
  include 'footer.php';
?>
  