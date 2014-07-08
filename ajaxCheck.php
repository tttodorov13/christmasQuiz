<?php

$url = $_SERVER['REQUEST_URI'];
$url_parse = parse_url($url);
$get = $_GET;

echo '<pre>';
var_dump($get);
echo '</pre>';

header("Content-Type: text/html; charset=utf-8");
$link = mysqli_connect("localhost", "christmas_quiz", "christmas_quiz", "christmas_quiz");

if (mysqli_connect_errno($link)) {
    echo "Failed to connect to My DataBase: " . mysqli_connect_error();
}

function checkCorect($question_id, $ans_value) {
    global $link;
    $result = mysqli_query($link, "SELECT ans1 , ans2 , ans3 , ans4 , correct FROM questions 
					WHERE id = '$question_id'");
    $question_array = mysqli_fetch_assoc($result);
    
    $resultString = "Question" + $question_id + " is correct";
    
    if (($ans_value == $question_array['ans1']) && ($question_array['correct'] == "Answer 1")) {
        return $resultString;
    }
    if (($ans_value == $question_array['ans2']) && ($question_array['correct'] == "Answer 2")) {
        return $resultString;
    }
    if (($ans_value == $question_array['ans3']) && ($question_array['correct'] == "Answer 3")) {
        return $resultString;
    }
    if (($ans_value == $question_array['ans4']) && ($question_array['correct'] == "Answer 4")) {
        return $resultString;
    }
}

foreach ($get as $question => $ans_value) {
    $question_id = substr($question, 8);
    echo checkCorect($question_id, $ans_value) . "<br/><br/>";
}

die();

?>