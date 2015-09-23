<?php
session_start();
?>

<?php 
include 'header.php';
require 'config.php';
require('model/Database.class.php');
require('model/Questions.class.php');
require('model/Reponses.class.php');
require('model/Users.class.php');
require('model/Category.class.php');
?>

<?php 
$category='';

 if(!empty($_POST['name'])){

     $users = new Users();
     $name=$_POST['name'];
     $category=$_POST['category'];
     $users->createUser($id, $name, $score, $category);
     // mysql_query("INSERT INTO quizVtrois_users (id, user_name,score,category_id)VALUES ('NULL','$name',0,'$category')") or die(mysql_error());

     

     $_SESSION['name']= $name;
     $_SESSION['id'] = mysql_insert_id();
     // $_SESSION['id'] = $users->get_last_userID();
 }


$category=$_POST['category'];

if(!empty($_SESSION['name'])){
?>

<?php
if(isset($_POST[1])){ 
   $keys=array_keys($_POST);
   $order=join(",",$keys);

   // $response = new Reponses();
   // $response->queryAnswer();
   $response=mysql_query("SELECT id,answer FROM quizVtrois_questions WHERE id IN($order) ORDER BY FIELD(id,$order)");
   $right_answer=0;
   $wrong_answer=0;
   $unanswered=0;
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

   echo "right_answer : ". $right_answer."<br>";
   echo "wrong_answer : ". $wrong_answer."<br>";
   echo "unanswered : ". $unanswered."<br>";


   
}

include_once('view/default_questions.php');
?>
     
<?php }else{

 header( 'Location: http://www.msmall.fr/quiz/index.php' ) ;

}
?>