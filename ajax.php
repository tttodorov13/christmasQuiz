<?php

$link=mysqli_connect("localhost","root", "","christmas_quiz");
  if (mysqli_connect_errno($link))
   {
     echo "Failed to connect to My DataBase: " . mysqli_connect_error();
   }


if(isset($_POST) && count($_POST)){
  $question = mysqli_real_escape_string($link,$_REQUEST['question']);
    $ans1 = mysqli_real_escape_string($link,$_REQUEST['ans1']);
    $ans2 = mysqli_real_escape_string($link,$_REQUEST['ans2']);
    $ans3 = mysqli_real_escape_string($link,$_REQUEST['ans3']);
    $ans4 = mysqli_real_escape_string($link,$_REQUEST['ans4']);
    $selected_option = mysqli_real_escape_string($link,$_REQUEST['selected_option']);
 
  if($action == "save"){
     mysqli_query($link, "INSERT INTO questions 
          SET question = '$question', ans1 = '$ans1', 
            ans2 = '$ans2', ans3 = '$ans3', 
            ans4 =  '$ans4', correct = '$selected_option'");  

    }
      echo json_encode(
          array(
              "success" => "1",
              "row_id"  => time(),
              "question"   => htmlentities($question),
              "ans1"   => htmlentities($ans1),
              "ans2"   => htmlentities($ans2),
              "ans3"   => htmlentities($ans3),
              "ans4"   => htmlentities($ans4),
              "selected_option"   => htmlentities($selected_option),
          )
      );
  }
  else if($action == "delete"){
      // Add code to remove record from database
      echo json_encode(
          array(
              "success" => "1",
              "item_id"  => $item_id                  
          )   
      );
  }
}else{
  echo json_encode(
      array(
          "success" => "0",
          "item_id"  => "No POST data set"                
      )   
  );}

?>