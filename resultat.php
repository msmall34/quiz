<?php
session_start();
?>
<?php 
require 'config.php';
require('model/Database.class.php');
require('model/Questions.class.php');
require('model/Reponses.class.php');
require('model/Users.class.php');
require('model/Category.class.php');
?>

<?php 
if(!empty($_SESSION['name'])){

    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 
    $count = count($_POST);
   $keys=array_keys($_POST);
   $order=join(",",$keys);


   $response=mysql_query("SELECT id,answer FROM quizVtrois_reponses WHERE id IN($order) ORDER BY FIELD(id,$order)");
   // $response = new Reponses();
   // $response->queryAnswer();

   while($result=mysql_fetch_array($response)){
       if($result['answer']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }

   $name=$_SESSION['name'];  
   mysql_query("UPDATE quizVtrois_users SET score='$right_answer' WHERE user_name='$name'");
   include_once('view/default_reponses.php');
?>

      
<?php }else{

 header( 'Location: http://www.msmall.fr/quiz/index.php' ) ;

}?>